<?= $this->extend('admin/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p class="lead">Detail Biodata Siswa</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<img src="<?php base_url() ?>/assets/img/<?= $identitas['foto']; ?>" alt="" style="height: 8cm; width: 6cm;">
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<table style="margin-bottom: 30px;">
						<thead>
							<h3>Data Pribadi</h3>
						</thead>
						<tr>
							<td>NISN </td>
							<td>:</td>
							<td> <?= $identitas['NISN']; ?></td>
						</tr>
						<tr>
							<td>Nama </td>
							<td>:</td>
							<td> <?= $identitas['Nama']; ?></td>
						</tr>
						<tr>
							<td>Jenis Kelamin </td>
							<td>:</td>
							<td>Laki-laki</td>
						</tr>
						<tr>
							<td>Jurusan </td>
							<td>:</td>
							<td>MIPA</td>
						</tr>
						<tr>
							<td>Angkatan </td>
							<td>:</td>
							<td>2018</td>
						</tr>
						<tr>
							<td>Status </td>
							<td>:</td>
							<td>Aktif</td>
						</tr>
						<tr>
							<td>Alamat </td>
							<td>:</td>
							<td>Jl. Suka-suka 45, Sukasari, Palembang</td>
						</tr>
						<tr>
							<td>Diterima di Sekolah </td>
							<td>:</td>
							<td>6 Juni 2018</td>
						</tr>
					</table>
					<table>
						<thead>
							<h3>Data Orangtua</h3>
						</thead>
						<tr>
							<td>Nama Ayah </td>
							<td>:</td>
							<td>Bedjo Sugianto</td>
						</tr>
						<tr>
							<td>Pekerjaan </td>
							<td>:</td>
							<td>PNS</td>
						</tr>
						<tr>
							<td>Alamat </td>
							<td>:</td>
							<td>Jl. Suka-suka 45, Sukasari, Palembang</td>
						</tr>
						<tr>
							<td>No Hp </td>
							<td>:</td>
							<td>0812313121</td>
						</tr>
						<tr>
							<td>Pendidikan Terakhir </td>
							<td>:</td>
							<td>S2</td>
						</tr>
						<tr style="height: 10px;"></tr>
						<tr>
							<td>Nama Ibu </td>
							<td>:</td>
							<td>Titin Sumartin</td>
						</tr>
						<tr>
							<td>Pekerjaan </td>
							<td>:</td>
							<td>Ibu Rumah Tangga</td>
						</tr>
						<tr>
							<td>Alamat </td>
							<td>:</td>
							<td>Jl. Suka-suka 45, Sukasari, Palembang</td>
						</tr>
						<tr>
							<td>No Hp </td>
							<td>:</td>
							<td>087212313532</td>
						</tr>
						<tr>
							<td>Pendidikan Terakhir </td>
							<td>:</td>
							<td>S1</td>
						</tr>
					</table>
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
<?= $this->endSection(); ?>