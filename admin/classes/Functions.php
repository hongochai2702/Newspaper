<?php
// H�m di?u hu?ng trang.
class Redirect {
    public function __construct( $url = '' ){
         if ( $url ) {
            echo '<script>location.href="'.$url.'";</script>';
         }
    }
}