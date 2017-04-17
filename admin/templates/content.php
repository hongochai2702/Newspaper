<div class="col-md-9 content">
	<?php 
		// Phân trang content.
		// Lấy tham số tab.
		if ( isset( $_GET['tab'] ) ) {
			$tab = trim(addslashes(htmlspecialchars($_GET['tab'])));
		} else { $tab = ''; }

		// Nếu có tham số tab.
		if ( $tab != '' ) {
			// Hiện thị template chức năng theo tham số tab.
			if ( $tab == 'profile' ) {
				// Hiện thị template hồ sơ cá nhân.
				require_once 'templates/profile.php';
			} else if ( $tab == 'posts' ) {
				// Hiện thị templates bài viết.
				require_once 'templates/posts.php';
			} else if ( $tab == 'photos' ) {
				// Hiện thị templates hình ảnh.
				require_once 'templates/photos.php';
			} else if ( $tab == 'categories' ) {
				// Hiện thị templates chuyên mục.
				require_once 'templates/categories.php';
			} else if ( $tab == 'setting' ) {
				// Hiện thị templates cấu hình.
				require_once 'templates/setting.php';
			}
		} else { // Ngược lại không có các tham số tab.
			// Hiện thị templates bảng điều khiển.
			require_once 'templates/dashboard.php';
		}
	?>
</div> <!-- div.content -->