<?= $this->extend('admin/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<a href="" style="float: right;" class="btn btn-success"></a>
			<h2>Presensi</h2>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Sandrian Yulian Firmansyah Noorihsan</td>
						<td>
							<a class="btn btn-success" href=""><span class="fa fa-check-circle" style="padding-right: 5px;"></span>Present</a>
							<a class="btn btn-warning" href=""><span class="fa fa-exclamation-circle" style="padding-right: 5px;"></span>Excuse</a>
							<a class="btn btn-danger" href=""><span class="fa fa-times-circle" style="padding-right: 5px;"></span>Absent</a>
						</td>

					</tr>
					<tr>
						<td>Hanifa Putri Rahima</td>
						<td>
							<a class="btn btn-success" href=""><span class="fa fa-check-circle" style="padding-right: 5px;"></span>Present</a>
							<a class="btn btn-warning" href=""><span class="fa fa-exclamation-circle" style="padding-right: 5px;"></span>Excuse</a>
							<a class="btn btn-danger" href=""><span class="fa fa-times-circle" style="padding-right: 5px;"></span>Absent</a>
						</td>
					</tr>
					<tr>
						<td>Alizza Iman R.</td>
						<td>
							<a class="btn btn-success" href=""><span class="fa fa-check-circle" style="padding-right: 5px;"></span>Present</a>
							<a class="btn btn-warning" href=""><span class="fa fa-exclamation-circle" style="padding-right: 5px;"></span>Excuse</a>
							<a class="btn btn-danger" href=""><span class="fa fa-times-circle" style="padding-right: 5px;"></span>Absent</a>
						</td>

					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th>Nama</th>
						<th>Status</th>
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
		$('#example').DataTable();
	});
</script>
<?= $this->endSection('content'); ?>