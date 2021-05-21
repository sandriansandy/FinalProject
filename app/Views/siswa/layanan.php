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
							<tr>
								<td>Dispensasi</td>
								<td>
									<a class="btn btn-success" href=""><span class="fa fa-download" style="padding-right: 5px;"></span></a>
								</td>
							</tr>
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
<?= $this->endSection('content'); ?>