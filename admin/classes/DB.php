<?php

// L?p Database.
class DB {
    
    // C�c th�ng tin k?t n?i DB.
    private $hostname = 'localhost',
            $username = 'root',
            $password = '',
            $dbname   = 'php_newspaper';
    
    // Bi?n luu tr? k?t n?i.
    public $cn = NULL;
    
    // H�m k?t n?i DB.
    public function connect() {
        $this->cn = mysqli_connect( $this->hostname, $this->username, $this->password, $this->dbname );
    }
    
    // H�m ng?t k?t n?i DB.
    public function close() {
        if ( $this->cn ) {
            mysqli_close( $this->cn );
        }
    }
    
    // H�m truy v?n.
    public function query( $sql = null ) {
        if ( $this->cn ) {
            mysqli_query( $this->cn, $sql );
        }
    }
    
    // H�m d?m s? h�ng.
    public function num_rows( $sql = null ) {
        if ( $this->cn ) {
            $query = mysqli_query( $this->cn, $sql );
            if( $query ) {
                $rows = mysqli_num_rows( $query );
                return $rows;
            }   
        }
    }
    // H�m l?y d? li?u.
    public function fetch_assoc( $sql = null, $type ) {
        if ( $this->cn ) {
            $query = mysqli_query( $this->cn, $sql );
            if ( $query ) {
                if ( $type == 0 ) {
                    // L?y d? li?u g�n v�o m?ng.
                    while( $row = mysqli_fetch_assoc( $query ) ){
                        $data[] = $row;
                    }
                    return $data;
                } else if ( $type == 1 ) {
                    // L?y d? li?u g�n v�o bi?n.
                    $data = mysqli_fetch_assoc( $query );
                    return $data;
                }
            }
        }
    }
    
    
    // H�m l?y ID cao nh?t.
    public function insert_id() {
        if ( $this->cn ){
            $count = mysqli_insert_id( $this->cn );
            if ( $count == '0' ) {
                $count = '1';
            } else {
                $count = $count;
            }
            
            return $count;
        }
    }
    // H�m charset cho DB.
    public function set_char( $uni ) {
        if ( $this->cn ) mysqli_set_charset( $this->cn, $uni );
    }
}