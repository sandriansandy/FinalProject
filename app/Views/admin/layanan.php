<?= $this->extend('admin/header_footer'); ?>

<?= $this->section('content'); ?>
<!--    MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p class="lead">Riwayat Pengajuan Siswa</p>
				</div>
			</div>
			<table id="example" class="table table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>Tanggal</th>
						<th>Nama Siswa</th>
						<th>Tipe Pengajuan</th>
						<th>Dokumen</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($identitas as $i) : ?>
						<tr>
							<td><?= $i['tanggal']; ?></td>
							<td><?= $i['Nama']; ?></td>
							<td><?= $i['jenis_berkas']; ?></td>
							<td>
								<a class="btn btn-info" href="<?php base_url() ?>/admin/downloadBerkas/<?= $i['id_form']; ?>"><span class="fa fa-info" style="padding-right: 5px;"></span>Download Berkas</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr>
                        <th>Tanggal</th>
						<th>Nama Siswa</th>
						<th>Tipe Pengajuan</th>
						<th>Dokumen</th>
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