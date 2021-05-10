<?= $this->extend('admin/header_footer'); ?>

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
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<a href="" class="btn btn-success" style="float: right;"><span class="fa fa-plus"></span> Tambah Data</a>
				</div>
			</div>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>Tanggal</th>
						<th>Nama</th>
						<th>Kelas</th>
						<th>Pengajuan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>13-11-2019</td>
						<td>Sandrian Yulian Firmansyah Noorihsan</td>
						<td>XI MIPA 2</td>
						<td>Pengajuan Proposal</td>
						<td>
							<a class="btn btn-success" href=""><span class="fa fa-download" style="padding-right: 5px;"></span>Download document</a>
						</td>

					</tr>
					<tr>
						<td>13-05-2019</td>
						<td>Hanifa Putri Rahima</td>
						<td>XI MIPA 1</td>
						<td>Pengajuan Dispensasi</td>
						<td>
							<a class="btn btn-success" href=""><span class="fa fa-download" style="padding-right: 5px;"></span>Download document</a>
						</td>
					</tr>
					<tr>
						<td>13-05-2019</td>
						<td>Alizza Iman R.</td>
						<td>XII Bahasa 2</td>
						<td>Pengajuan Proposal</td>
						<td>
							<a class="btn btn-success" href=""><span class="fa fa-download" style="padding-right: 5px;"></span>Download document</a>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th>Tanggal</th>
						<th>Nama</th>
						<th>Kelas</th>
						<th>Pengajuan</th>
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
<?= $this->endSection('content'); ?>