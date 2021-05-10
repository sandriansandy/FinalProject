<?= $this->extend('guru/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p class="lead">Presensi Siswa</p>
				</div>
			</div>
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
<?= $this->endSection('content'); ?>