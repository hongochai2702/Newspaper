<?php

// Require database & thông tin chung.
require_once 'core/init.php';

// Require header.
require_once 'includes/header.php';

// Nếu user đăng nhập.
if ( $user ) {
	// Hiện thị sidebar.
	require_once 'templates/sidebar.php';
	// Hiện thị content.
	require_once 'templates/content.php';
}
else { // Nếu không đăng nhập.
	// Hiện thị form đăng nhập.
	require_once 'templates/signin.php';
}

// Require footer.
require_once 'includes/footer.php';
?>