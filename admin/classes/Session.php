<?php
class Session {
    // Hàm b?t d?u Sesion.
    public function start() {
        session_start();
    }
    
    // Hàm luu Session.
    public function send( $user ) {
        $_SESSION['user'] = $user;
    }
    
    // Hàm l?y d? li?u Session.
    public function get(){
        if ( isset($_SESSION['user']) ) {
            $user = $_SESSION['user'];
        } else {
            $user = '';
        }
        return $user;
    }
    
    // Hàm xóa Session.
    public function destroy(){
        session_destroy();
    }
}