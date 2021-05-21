<?= $this->extend('admin/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p class="lead">Template Berkas</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>Kode Berkas</th>
								<th>Jenis Berkas</th>
								<th>Berkas</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($layanan as $l) : ?>
								<tr>
									<td><?= $l['id_form']; ?></td>
									<td><?= $l['tanggal']; ?></td>
									<td><?= $l['Nama']; ?></td>
									<td><?= $l['tipe_form']; ?></td>
									<td>
										<a class="btn btn-success" href=""><span class="fa fa-download" style="padding-right: 5px;"></span><?= $l['form']; ?></a>
									</td>

								</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<th>Kode Berkas</th>
								<th>Jenis Berkas</th>
								<th>Berkas</th>
								<th>Action</th>
							</tr>
						</tfoot>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<h2>Tambah Template</h2>
					<form action="<?php base_url() ?>/admin/simpanKelas" method="post" enctype="multipart/form-data">
						<label for="form">Tipe Form</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-book"></i></span>
							<input class="form-control" placeholder="Tipe Form" type="text" id="form" name="form" required>
						</div>
						<br>
						<label for="tanggal">Tanggal</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							<input class="form-control" placeholder="YYYY-MM-DD" type="text" id="tanggal" name="tanggal" required>
						</div>
						<br>
						<label for="form">Unggah Form</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-file"></i></span>
							<input class="form-control" placeholder="Form" type="file" name="form">
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
<!-- Javascript -->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="../assets/vendor/chartist/js/chartist.min.js"></script>
<script src="../assets/scripts/klorofil-common.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
<?= $this->endSection('content'); ?>