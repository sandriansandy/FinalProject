<?= $this->extend('admin/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel">
				<div class="panel-heading">
					<h1 class="panel-title">Form Tambah Data</h1>
				</div>
				<div class="panel-body">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input class="form-control" placeholder="NISN" type="text">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input class="form-control" placeholder="Nama" type="text">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input class="form-control" placeholder="Tempat Tanggal Lahir" type="date">
					</div>
					<br>
					<select class="form-control">
						<option value="cheese">X</option>
						<option value="tomatoes">XI</option>
						<option value="mozarella">XII</option>
					</select>
					<br>
					<select class="form-control">
						<option value="cheese">MIPA</option>
						<option value="tomatoes">IIS</option>
						<option value="mozarella">Bahasa</option>
					</select>
					<br>
					<label class="fancy-radio">
						<input name="gender" value="male" type="radio">
						<span><i></i>Laki-laki</span>
						<input name="gender" value="female" type="radio">
						<span><i></i>Perempuan</span>
					</label>
					<br>
					<a href="pds.html" class="btn btn-success">Submit</a>
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<?= $this->endSection('content'); ?>