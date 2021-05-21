<?= $this->extend('admin/header_footer'); ?>

<?= $this->section('content'); ?>
<!--    MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<?php if (session()->getFlashdata('pesan')) : ?>
					<div class="alert alert-success" role="alert"><?= session()->getFlashdata('pesan') ?></div>
				<?php endif; ?>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p class="lead">Pangkalan Data Siswa</p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<a href="<?php base_url() ?> /admin/tambahSiswa" class="btn btn-success" style="float: right;"><span class="fa fa-plus"></span> Tambah Data</a>
				</div>
			</div>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>NISN</th>
						<th>Nama</th>
						<th>Angkatan</th>
						<th>Kelas</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($identitas as $i) : ?>
						<tr>
							<td><?= $i['NISN']; ?></td>
							<td><?= $i['Nama']; ?></td>
							<td><?= $i['Angkatan']; ?></td>
							<td><?= $i['nama']; ?></td>
							<td>
								<a class="btn btn-info" href="<?php base_url() ?> /admin/detailSiswa/<?= $i['NISN']; ?>"><span class="fa fa-info" style="padding-right: 5px;"></span>Detail</a>
								<a class="btn btn-warning" href="editSiswa.html"><span class="glyphicon glyphicon-edit" style="padding-right: 5px;"></span>Edit</a>
								<a class="btn btn-danger" href="<?php base_url() ?> /admin/hapusSiswa/<?= $i['NISN']; ?>"><span class="glyphicon glyphicon-trash" style="padding-right: 5px;"></span>Delete</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr>
						<th>NISN</th>
						<th>Nama</th>
						<th>Angkatan</th>
						<th>Kelas</th>
						<th>Action</th>
					</tr>
				</tfoot>
			</table>
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
		$('#example').DataTable({
			"paging": true,
			"ordering": true,
			"info": false
		});
	});
</script>
<?= $this->endSection('content'); ?>