<?= $this->extend('siswa/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p class="lead">Arsip Pengajuan Siswa</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>Pengajuan</th>
								<th>Link Form</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($layanan as $l) : ?>
								<tr>
									<td><?= $l['tipe_form']; ?></td>
									<td>
										<a class="btn btn-success" href=""><span class="fa fa-download" style="padding-right: 5px;"></span><?= $l['form']; ?></a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<th>Pengajuan</th>
								<th>Link Form</th>
							</tr>
						</tfoot>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<h2>Tambah Pengajuan</h2>
					<form action="<?php base_url() ?>/admin/simpanKelas" method="post" enctype="multipart/form-data">
						<label for="tanggal">Tanggal</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							<input class="form-control" placeholder="YYYY-MM-DD" type="text" id="tanggal" name="tanggal" required>
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input class="form-control" placeholder="Kode Kelas" type="text" id="id_kelas" name="kode" required>
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-book"></i></span>
							<input class="form-control" placeholder="Nama Kelas" type="text" id="nama" name="kelas" required>
						</div>
						<br>
						<input type="submit" value="SUBMIT" class="btn btn-success">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<?= $this->endSection('content'); ?>