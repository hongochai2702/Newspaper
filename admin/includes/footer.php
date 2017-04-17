    <!-- Liên kết thư viện jQuery Form -->
    <script src="<?php echo $_DOMAIN; ?>js/jquery.form.min.js" type="text/javascript" charset="utf-8" async></script>
    <?php 
    // Active sidebar.
    // Lấy tham số tab.
    if ( isset( $_GET['tab'] ) ) {
    	$tab = trim(addslashes(htmlspecialchars($_GET['tab'])));
    } else {
    	$tab = '';
    }

    // Nếu có tham só tab.
    if ( $tab != '' ) {
    	// Tháo active Bảng điều khiển.
    	echo '<script>$(".sidebar ul a:eq(1)").removeClass("active");</script>';
    	// Active theo giá trị của tham số tab.
    	if ( $tab == 'profile' ) {
    		echo '<script>$(".sidebar ul a:eq(2)").addClass("active");</script>';
    	} else if ( $tab == 'posts' ) {
    		echo '<script>$(".sidebar ul a:eq(3)").addClass("active");</script>';
    	} else if ( $tab == 'photos' ) {
    		echo '<script>$(".sidebar ul a:eq(4)").addClass("active");</script>';
    	} else if ( $tab == 'categories' ) {
    		echo '<script>$(".sidebar ul a:eq(5)").addClass("active");</script>';
    	} else if ( $tab == 'setting' ) {
    		echo '<script>$(".sidebar ul a:eq(6)").addClass("active");</script>';
    	}
    } 
    ?>
    </body>
</html>