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
						<input class="form-control" placeholder="Kode kelas" type="text">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input class="form-control" placeholder="Mata Pelajaran" type="text">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input class="form-control" placeholder="Nama Guru" type="text">
					</div>
					<br>
					<select class="form-control">
						<option value="cheese">X MIPA 1</option>
						<option value="tomatoes">XI MIPA 2</option>
						<option value="mozarella">XII MIPA 3</option>
					</select>
					<br>
					<select class="form-control">
						<option value="cheese">Senin</option>
						<option value="tomatoes">Selasa</option>
						<option value="mozarella">Rabu</option>
						<option value="">Kamis</option>
						<option value="">Jumat</option>
					</select>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input class="form-control" placeholder="Jam Mulai" type="text">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input class="form-control" placeholder="Jam Berakhir" type="text">
					</div>
					<br>
					<label class="fancy-radio">
						<input name="gender" value="male" type="radio">
						<span><i></i>Laki-laki</span>
						<input name="gender" value="female" type="radio">
						<span><i></i>Perempuan</span>
					</label>
					<br>
					<a href="jadwal.html" class="btn btn-success">Submit</a>
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<?= $this->endSection('content'); ?>