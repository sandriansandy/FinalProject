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
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>Nama Berkas</th>
						<th>Link Form</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Pengajuan Proposal</td>
						<td>
							<a class="btn btn-success" href=""><span class="fa fa-download" style="padding-right: 5px;"></span>Form Pengajuan</a>
						</td>

					</tr>
					<tr>
						<td>Pengajuan Dispensasi</td>
						<td>
							<a class="btn btn-success" href=""><span class="fa fa-download" style="padding-right: 5px;"></span>Form Pengajuan</a>
						</td>
					</tr>
					<tr>
						<td>Surat Sakit</td>
						<td>
							<a class="btn btn-success" href=""><span class="fa fa-download" style="padding-right: 5px;"></span>Form Pengajuan</a>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th>Tanggal</th>
						<th>Nama</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<?= $this->endSection('content'); ?>