<?= $this->extend('guru/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<?php foreach ($guru as $g) : ?>
						<img src="../assets/img/<?= $g['foto']; ?>" alt="" style="height: 8cm; width: 6cm;">
					<?php endforeach; ?>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<table style="margin-bottom: 30px;">
						<?php foreach ($guru as $g) : ?>
							<thead>
								<h3>Data Pribadi</h3>
							</thead>
							<tr>
								<td>NIP </td>
								<td>:</td>
								<td><?= $g['NIP']; ?></td>
							</tr>
							<tr>
								<td>Nama </td>
								<td>:</td>
								<td><?= $g['Nama']; ?></td>
							</tr>
							<tr>
								<td>Jenis Kelamin </td>
								<td>:</td>
								<td><?= $g['jenis_kelamin']; ?></td>
							</tr>
							<tr>
								<td>Mata Pelajaran </td>
								<td>:</td>
								<td><?= $g['mapel']; ?></td>
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
								<td><?= $g['Alamat']; ?></td>
							</tr>
							<tr>
								<td>Mulai Mengajar </td>
								<td>:</td>
								<td><?= $g['tgl_masuk']; ?></td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<?= $this->endSection('content'); ?>