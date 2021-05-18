<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/icon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<h1 class="heading"><img src="../assets/img/icon.png" alt="" style="width: 48px; height: 48px;"> SINOFAK</h1>
								<p class="lead">Change Password</p>
							</div>
                            <?php if (session()->getFlashdata('pesan')) : ?>
									<div class="alert alert-danger" role="alert"><?= session()->getFlashdata('pesan') ?></div>
							<?php endif; ?>
							<form class="form-auth-small" action="<?php base_url()?>/simpanPassword" method="POST">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input class="form-control" placeholder="Password" type="password" id="uname" name="pass1">
								</div>
								<br>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input class="form-control" placeholder="Re-type Password" type="password" id="pw" name="pass2">
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">SUBMIT</button>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
