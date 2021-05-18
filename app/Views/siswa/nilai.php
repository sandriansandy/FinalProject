<?= $this->extend('siswa/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p class="lead">Data Nilai Siswa</p>
					<br>
					<select class="form-control" style="width: 20%" ;>
						<option value="cheese">Semester 1</option>
						<option value="tomatoes">Semester 2</option>
						<option value="mozarella">Semester 3</option>
						<option value="">Semester 4</option>
						<option value="">Semester 5</option>
						<option value="">Semester 6</option>
					</select>
					<br>
					<br>
					<table>
						<tbody>
							<tr>
								<td>Kelas</td>
								<td>:</td>
								<td>X MIPA 1</td>
							</tr>
						</tbody>
					</table> <br>
				</div>
			</div>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>Mata Pelajaran</th>
						<th>Tugas 1</th>
						<th>Tugas 2</th>
						<th>UTS</th>
						<th>UAS</th>
						<th>Total Nilai</th>
						<th>Rata-Rata</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Matematika</td>
						<td>88</td>
						<td>76</td>
						<td>75</td>
						<td>78</td>
						<td>xxx</td>
						<td>xxx</td>
					</tr>
					<tr>
						<td>Fisika</td>
						<td>75</td>
						<td>78</td>
						<td>98</td>
						<td>96</td>
						<td>xxx</td>
						<td>xxx</td>
					</tr>
					<tr>
						<td>Kimia</td>
						<td>92</td>
						<td>71</td>
						<td>82</td>
						<td>90</td>
						<td>xxx</td>
						<td>xxx</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th>Mata Pelajaran</th>
						<th>Tugas 1</th>
						<th>Tugas 2</th>
						<th>UTS</th>
						<th>UAS</th>
						<th>Total Nilai</th>
						<th>Rata-Rata</th>
					</tr>
				</tfoot>
			</table>
			</table>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<?= $this->endSection('content'); ?>