<div class="container">
	<div class="row">
		<div class="col-lg-6 col md-6 col-sm-12">
			<p>Vui lòng đăng nhập để tiếp tục</p>
			<form method="POST" id="formSignin" onsubmit="return false;">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" class="form-control" placeholder="Tên đăng nhập" id="user_signin" />
					</div> <!-- end of input-group -->
				</div> <!-- end of form-group -->

				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" class="form-control" placeholder="Mật khẩu" id="pass_signin" />
					</div> <!-- end of input-group -->
				</div> <!-- end of form-group -->

				<div class="form-group">
					<button class="btn btn-primary" type="submit">Đăng nhập</button>
				</div> <!-- end of form-group -->
				<div class="alert alert-danger hidden"></div>
			</form> <!-- end of #formSignin -->
		</div> <!-- end of col-md-6 -->
	</div> <!-- end of row -->
</div> <!-- end of container -->