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
			<?php if (session()->getFlashdata('pesan')) : ?>
					<div class="alert alert-success" role="alert"><?= session()->getFlashdata('pesan') ?></div>
				<?php ; elseif(session()->getFlashdata('error')): ?>
					<div class="alert alert-danger" role="alert"><?= session()->getFlashdata('error') ?></div>
				<?php endif; ?>				
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>Kode Berkas</th>
								<th>Jenis Berkas</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($berkas as $b) : ?>
								<tr>
									<td><?= $b['id_berkas']; ?></td>
									<td><?= $b['jenis_berkas']; ?></td>
									<td>
										<a class="btn btn-danger" href="<?php base_url()?>/admin/hapusBerkas/<?= $b['id_berkas']?>"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<th>Kode Berkas</th>
								<th>Jenis Berkas</th>
								<th>Action</th>
							</tr>
						</tfoot>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<h2>Tambah Template</h2>
					<form action="<?php base_url() ?>/admin/simpanBerkas" method="post" enctype="multipart/form-data">
						<label for="form">Kode Berkas</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-file"></i></span>
							<input class="form-control" placeholder="Kode Berkas" type="text" id="form" name="kode" required>
						</div>
						<br>
						<label for="form">Tipe Berkas</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-file"></i></span>
							<input class="form-control" placeholder="Tipe Berkas" type="text" id="form" name="form" required>
						</div>
						<br>
						<label for="form">Unggah Template</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-file"></i></span>
							<input class="form-control" placeholder="Form" type="file" name="template" required>
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