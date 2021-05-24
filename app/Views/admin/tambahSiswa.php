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
				<form action="<?php base_url() ?>/admin/simpanSiswa" method="post" enctype="multipart/form-data">
					<div class="panel-body">
						<label for="NISN">NISN</label><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input class="form-control" placeholder="NISN" type="text" id="NISN" name="NISN" required>
						</div>
						<br>
						<label for="Nama">Nama</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input class="form-control" placeholder="Nama" type="text" id="Nama" name="Nama" required>
						</div>
						<br>
						<label for="TTL">Tanggal Lahir</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input class="form-control" placeholder="Tempat Tanggal Lahir" type="date" id="TTL" name="TTL" required>
						</div>
						<br>
						<label for="Angkatan">Angkatan</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input class="form-control" placeholder="Angkatan" type="text" id="Angkatan" name="Angkatan" required>
						</div>
						<br>
						<label for="Alamat">Alamat</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input class="form-control" placeholder="Alamat" type="text" id="Alamat" name="Alamat" required>
						</div>
						<br>
						<label for="Tanggal_masuk">Tanggal Masuk</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input class="form-control" placeholder="Tanggal Masuk" type="date" id="Tanggal_masuk" name="Tgl_masuk" required>
						</div>
						<br>
						<label for="foto">Unggah Foto</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-file"></i></span>
							<input class="form-control" placeholder="foto" type="file" name="foto">
						</div>
						<br>
						<label for="Kelas">Kelas</label>
						<select class="form-control" name="kelas">
							<?php foreach ($kelas as $kel) : ?>
								<option value="<?= $kel['id_kelas'] ?>"><?= $kel['nama_kelas'] ?></option>
							<?php endforeach; ?>
						</select>
						<br>
						<label for="jenis_kelamin">Jenis Kelamin</label>
						<select class="form-control" name="gender">
							<option value="cheese">Laki-Laki</option>
							<option value="tomatoes">Perempuan</option>
						</select>
						<br>
						<input type="submit" value="SUBMIT" class="btn btn-success">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<?= $this->endSection('content'); ?>