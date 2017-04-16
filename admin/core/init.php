<?php

// Require các thu vi?n.
require_once 'classes/DB.php';
require_once 'classes/Functions.php';
require_once 'classes/Session.php';

// K?t n?i database.
$db = new DB();
$db->connect();
$db->set_char('utf8');

// Thông tin chung.
$_DOMAIN = 'http://php.dev/Newspaper';

date_default_timezone_get('Asia/Ho_Chi_Minh');
$date_current = '';
$date_current = date('Y-m-d H:i:sa');

// Kh?i t?o Session.
$session = new Session();
$session->start();

// Ki?m tra Session.
if ( $session->get() != '' ) {
    $user = $session->get();
}else {
    $user = '';
}