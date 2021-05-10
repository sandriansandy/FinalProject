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
					<tr>
						<td>Matematika</td>
						<td>5</td>
						<td>2</td>
						<td>1</td>
					</tr>
					<tr>
						<td>Fisika</td>
						<td>5</td>
						<td>3</td>
						<td>0</td>
					</tr>
					<tr>
						<td>Biologi</td>
						<td>8</td>
						<td>0</td>
						<td>0</td>
					</tr>
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
<?= $this->endSection('content'); ?>