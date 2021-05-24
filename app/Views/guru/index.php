<?= $this->extend('guru/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<img src="<?php base_url() ?>/assets/img/profil_guru/<?= $guru['foto']; ?>" alt="" style="height: 8cm; width: 6cm;">
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<table style="margin-bottom: 30px;">
						<thead>
							<h3>Data Pribadi</h3>
						</thead>
						<tr>
							<td>NIP </td>
							<td>:</td>
							<td><?= $guru['NIP']; ?></td>
						</tr>
						<tr>
							<td>Nama </td>
							<td>:</td>
							<td><?= $guru['nama_guru']; ?></td>
						</tr>
						<tr>
							<td>Jenis Kelamin </td>
							<td>:</td>
							<td><?= $guru['jenis_kelamin']; ?></td>
						</tr>
						<tr>
							<td>Mata Pelajaran </td>
							<td>:</td>
							<td><?= $guru['Nama_mapel']; ?></td>
						</tr>
						<tr>
							<td>Pendidikan Terakhir </td>
							<td>:</td>
							<td>S1</td>
						</tr>
						<tr>
							<td>Status </td>
							<td>:</td>
							<td>Aktif</td>
						</tr>
						<tr>
							<td>Alamat </td>
							<td>:</td>
							<td><?= $guru['Alamat']; ?></td>
						</tr>
						<tr>
							<td>Mulai Mengajar </td>
							<td>:</td>
							<td><?= $guru['tgl_masuk']; ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<?= $this->endSection('content'); ?>