<?= $this->extend('admin/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel">
				<div class="panel-heading">
					<h1 class="panel-title">Form Edit Data</h1>
				</div>
				<div class="panel-body">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input class="form-control" placeholder="NIP" type="text" value="432523">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input class="form-control" placeholder="Nama" type="text" value="Adi Santoso">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input class="form-control" placeholder="Tempat Tanggal Lahir" type="date">
					</div>
					<br>
					<select class="form-control" placeholder="Pendidikan Terakhir">
						<option value="cheese">D3</option>
						<option value="tomatoes">D4/S1</option>
						<option value="mozarella">S2</option>
					</select>
					<br>
					<select class="form-control">
						<option value="cheese">Biologi</option>
						<option value="tomatoes">Fisika</option>
						<option value="mozarella">Kimia</option>
						<option value="">Agama Islam</option>
						<option value="">Agama Kristen</option>
					</select>
					<br>
					<label class="fancy-radio">
						<input name="gender" value="male" type="radio">
						<span><i></i>Laki-laki</span>
						<input name="gender" value="female" type="radio">
						<span><i></i>Perempuan</span>
					</label>
					<br>
					<a href="pdg.html" class="btn btn-success">Submit</a>
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<!-- Javascript -->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="../assets/vendor/chartist/js/chartist.min.js"></script>
<script src="../assets/scripts/klorofil-common.js"></script>
<?= $this->endSection('content'); ?>