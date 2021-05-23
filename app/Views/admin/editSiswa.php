<?= $this->extend('admin/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel">
				<div class="panel-heading">
					<h1 class="panel-title">Form Ubah Data</h1>
				</div>
				<form href="<?php base_url() ?>/admin/updateSiswa/<?= $identitas['NISN']; ?>" method="POST" enctype="multipart/form-data">
					<div class="panel-body">
						<label for="Nama">Nama</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input class="form-control" placeholder="Nama" type="text" id="Nama" name="Nama" value="<?= $identitas['Nama']; ?>" required>
						</div>
						<br>
						<label for="TTL">Tanggal Lahir</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input class="form-control" placeholder="Tempat Tanggal Lahir" type="date" id="TTL" name="TTL" value="<?= $identitas['TTL']; ?>" required>
						</div>
						<br>
						<label for="Angkatan">Angkatan</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input class="form-control" placeholder="Angkatan" type="text" id="Angkatan" name="Angkatan" value="<?= $identitas['Angkatan']; ?>" required>
						</div>
						<br>
						<label for="Alamat">Alamat</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input class="form-control" placeholder="Alamat" type="text" id="Alamat" name="Alamat" value="<?= $identitas['Alamat']; ?>" required>
						</div>
						<br>
						<label for="tgl_masuk">Tanggal Masuk</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input class="form-control" placeholder="Tanggal Masuk" type="date" id="tgl_masuk" name="tgl_masuk" value="<?= $identitas['tgl_masuk']; ?>" required>
						</div>
						<br>
						<label for="Kelas">Kelas</label>
						<select class="form-control" name="kelas">
							<?php foreach ($kelas as $kel) : ?>
								<option value="<?= $kel['id_kelas'] ?>"><?= $kel['nama'] ?></option>
							<?php endforeach; ?>
						</select>
						<br>
						<label for="foto">Unggah Foto</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-file"></i></span>
							<input class="form-control" placeholder="foto" type="file" name="foto">
						</div>
						<br>
						<label for="jenis_kelamin">Jenis Kelamin</label>
						<select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
							<option value="L">Laki-Laki</option>
							<option value="P">Perempuan</option>
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