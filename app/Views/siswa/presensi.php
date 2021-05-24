<?= $this->extend('siswa/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p class="lead">Data Presensi Siswa</p>
				</div>
			</div>
			<select class="form-control" style="width: 20%;">
				<option value="cheese">Semester 1</option>
				<option value="tomatoes">Semester 2</option>
				<option value="mozarella">Semester 3</option>
				<option value="">Semester 4</option>
				<option value="">Semester 5</option>
				<option value="">Semester 6</option>
			</select>
			<br>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>Mata Pelajaran</th>
						<th>Hadir</th>
						<th>Izin</th>
						<th>Alpha</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($jadwal as $j) : ?>
						<tr>
							<td><?= $j['Nama_mapel']; ?></td>
							<td><?= $present->getPresent(session('username'), $j['id_jadwal'])->resultID->num_rows ?></td>
							<td><?= $present->getExcuse(session('username'), $j['id_jadwal'])->resultID->num_rows ?></td>
							<td><?= $present->getAbstain(session('username'), $j['id_jadwal'])->resultID->num_rows ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr>
						<th>Mata Pelajaran</th>
						<th>Hadir</th>
						<th>Izin</th>
						<th>Alpha</th>
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
			pageLength: 10,
			filter: true,
			deferRender: true,
			scrollY: 200,
			scrollCollapse: true,
			scroller: true
		});
	});
</script>
<?= $this->endSection('content'); ?>