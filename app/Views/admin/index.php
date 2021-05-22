<?= $this->extend('admin/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel-body">
				<h2>Selamat Datang, Admin</h2>
				<br>
				<div class="row">
					<div class="col-md-3">
						<div class="metric">
							<span class="icon"><i class="fa fa-users"></i></span>
							<p>
								<span class="number">934</span>
								<span class="title">Siswa</span>
							</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="metric">
							<span class="icon"><i class="fa fa-user"></i></span>
							<p>
								<span class="number">33</span>
								<span class="title">Guru</span>
							</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="metric">
							<span class="icon"><i class="fa fa-eye"></i></span>
							<p>
								<span class="number">274,678</span>
								<span class="title">Kunjungan</span>
							</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="metric">
							<span class="icon"><i class="fa fa-bar-chart"></i></span>
							<p>
								<span class="number">14 GB</span>
								<span class="title">Total Data</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->
<!-- Javascript -->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="../assets/vendor/chartist/js/chartist.min.js"></script>
<script src="../assets/scripts/klorofil-common.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<?= $this->endSection('content'); ?>