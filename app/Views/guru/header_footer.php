<!doctype html>
<html lang="en">

<head>
	<title><?= $judul ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php base_url() ?>/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php base_url() ?>/assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?php base_url() ?>/assets/vendor/chartist/css/chartist-custom.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php base_url() ?>/assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php base_url() ?>/assets/img/icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php base_url() ?>/assets/img/icon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="<?php base_url() ?>/admin"><img src="<?php base_url() ?>/assets/img/icon.png" alt="Klorofil Logo" class="img-responsive logo" style="height: 24px; width: 24px;"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div class="navbar-btn navbar-btn-right">
					<a class="btn btn-danger update-pro" href="<?php base_url() ?>/logout" title="Logout"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="">
							<a class="update-pro" href="#" title="Upgrade to Pro" disabled><img src="<?php base_url() ?>/assets/img/user.png" class="img-circle" alt="Avatar"><span>Halo, Admin</span></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php base_url() ?>/guru" class="active"><i class="glyphicon glyphicon-home"></i> <span>Dashboard</span></a></li>
						<li><a href="<?php base_url() ?>/guru/jadwal" class=""><i class="glyphicon glyphicon-calendar"></i> <span>Jadwal Pelajaran</span></a></li>
						<li><a href="<?php base_url() ?>/guru/nilai" class=""><i class="glyphicon glyphicon-stats"></i> <span>Nilai Siswa</span></a></li>
						<li><a href="<?php base_url() ?>/guru/presensi" class=""><i class="glyphicon glyphicon-list-alt"></i> <span>Presensi Siswa</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->

		<?= $this->renderSection('content'); ?>

		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
</body>

</html>