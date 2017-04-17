<div class="col-md-3 sidebar">
	<ul class="list-group">
		<li class="list-group-item">
			<div class="media">
				<a href="#" class="pull-left"><img src="
				<?php 
					
					// URL ảnh đại diện tài khoản.
					if ( $data_user['url_avatar'] == '' ) {
						echo $_DOMAIN . 'images/profile.png';
					} else {
						echo $data_user['url_avatar'];
					}
				?>
				" alt="Ảnh đại diện của <?php echo $data_user['display_name']; ?>" class="media-object" width="64px" height="64px" /></a>
			</div> <!-- end of media -->

			<div class="media-body">
				<h4 class="media-heading"><?php $data_user['display_name']; ?></h4>
				<?php
					// Hiện thị cấp bậc tài khoản.
					// Nếu tài khoản là admin.
					if ( $data_user['position'] == 1 ) {
						echo '<span class="label label-primary">Quản trị viên</span>';
					} else { // Ngược lại tài khoản là tác giả.
						echo '<span class="label label-success">Tác giả</span>';
					}
				?>
			</div>
		</li>
		<a href="<?php echo $_DOMAIN; ?>" class="list-group-item active">
			<span class="glyphicon glyphicon-dashboard"></span> Bảng điều khiển
		</a>
		<a href="<?php echo $_DOMAIN; ?>profile" class="list-group-item">
			<span class="glyphicon glyphicon-user"></span> Hồ sơ cá nhân
		</a>
		<a href="<?php echo $_DOMAIN; ?>posts" class="list-group-item">
			<span class="glyphicon glyphicon-edit"></span> Bài viết
		</a>
		<a href="<?php echo $_DOMAIN; ?>photos" class="list-group-item">
			<span class="glyphicon glyphicon-picture"></span> Hình ảnh
		</a>

		<?php 
		// Phân quyền sidebar.
		// Nếu tài khoản là admin.
		if ( $data_user['position'] == '1' ) { ?>
			<a href="<?php echo $_DOMAIN; ?>categories" class="list-group-item">
				<span class="glyphicon glyphicon-tag"></span> Chuyên mục
			</a>
			<a href="<?php echo $_DOMAIN; ?>setting" class="list-group-item">
				<span class="glyphicon glyphicon-cog"></span> Cài đặt chung
			</a>
		<?php } ?>
		<a href="<?php echo $_DOMAIN; ?>signout.php" class="list-group-item">
			<span class="glyphicon glyphicon-off"></span> Thoát
		</a>
	</ul> <!-- ul.list-group -->
</div> <!-- div.sidebar -->