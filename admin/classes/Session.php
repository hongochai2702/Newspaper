<?php
class Session {
    // H�m b?t d?u Sesion.
    public function start() {
        session_start();
    }
    
    // H�m luu Session.
    public function send( $user ) {
        $_SESSION['user'] = $user;
    }
    
    // H�m l?y d? li?u Session.
    public function get(){
        if ( isset($_SESSION['user']) ) {
            $user = $_SESSION['user'];
        } else {
            $user = '';
        }
        return $user;
    }
    
    // H�m x�a Session.
    public function destroy(){
        session_destroy();
    }
}