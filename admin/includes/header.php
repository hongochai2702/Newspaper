<html lang="vi">
    <head>
        <meta charset="UTF-8" />
        <title>Newspaper Administartion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
        <!-- Liên két Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo $_DOMAIN; ?>/bootstrap/css/bootstrap.min.css" />
        
        <!-- Liên két thư viện jQuery -->
        <script src="<?php echo $_DOMAIN; ?>js/jquery.min.js"></script>
    </head>

    <body>

    	<?php if ( !$user ) : ?>
		<div class="container">
			<div class="page-header">
				<h1>Newspaper <small>Administration</small></h1>
			</div> <!-- end of page-header -->
		</div> <!-- end of container -->
		<?php else : ?>
		<div class="navbar navbar-default" rel="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="<?php echo $_DOMAIN; ?>" class="navbar-brand">Newspaper Administration</a>
				</div> <!-- end of navbar-header -->
			</div> <!-- end of container-fluid -->
		</div>
		<?php endif; ?>
