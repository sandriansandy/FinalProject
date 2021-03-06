<?= $this->extend('guru/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p class="lead">Data Nilai Siswa</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>Tahun Ajaran</th>
								<th>Kelas</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>2017/2018</td>
								<td>X MIPA 1</td>
								<td>
									<a class="btn btn-info" href="nilai.html"><span class="fa fa-info" style="padding-right: 5px;"></span>Detail</a>
									<a class="btn btn-warning" href=""><span class="glyphicon glyphicon-edit" style="padding-right: 5px;"></span>Edit</a>
								</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>Tahun Ajaran</th>
								<th>Kelas</th>
								<th>Action</th>
							</tr>
						</tfoot>
					</table>
				</div>
				<!-- <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<h2>Tambah Kelas</h2>
					<form action="<?php base_url() ?>/admin/simpanKelas" method="post" enctype="multipart/form-data">
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
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							<input class="form-control" placeholder="Tahun Ajaran" type="text" id="tahun_ajaran" name="tahun_ajaran" required>
						</div>
						<br>
						<input type="submit" value="SUBMIT" class="btn btn-success">
					</form>
				</div> -->
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
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>
<?= $this->endSection('content'); ?>