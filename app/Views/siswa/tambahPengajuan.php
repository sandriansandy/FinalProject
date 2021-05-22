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
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>Pengajuan</th>
								<th>Link Form</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($berkas as $b):?>
							<tr>
								<td><?=$b['jenis_berkas']?></td>
								<td>
									<a class="btn btn-success" href="<?php base_url()?>/siswa/download/<?= $b['id_berkas']?>"><span class="fa fa-download" style="padding-right: 5px;"></span></a>
								</td>
							</tr>
							<?php endforeach;?>
						</tbody>
						<tfoot>
							<tr>
								<th>Pengajuan</th>
								<th>Link Form</th>
							</tr>
						</tfoot>
					</table>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<h2>Tambah Pengajuan</h2>
					<form action="<?php base_url() ?>/siswa/simpanPengajuan" method="post" enctype="multipart/form-data">
						<label for="kode">Jenis Pengajuan</label>
						<select class="form-control" name="berkas">
							<?php foreach ($berkas as $b) : ?>
								<option value="<?= $b['id_berkas'] ?>"><?= $b['jenis_berkas'] ?></option>
							<?php endforeach; ?>
						</select>
						<br>
						<label for="tanggal">Tanggal</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							<input class="form-control" placeholder="YYYY-MM-DD" type="date" id="tanggal" name="tanggal" required>
						</div>
						<br>
						<label for="form">Unggah Form</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-file"></i></span>
							<input class="form-control" placeholder="Form" type="file" name="form">
						</div>
						<input type="hidden" name="nisn" value="<?= session('username')?>">
						<br>
						<input type="submit" value="SUBMIT" class="btn btn-success">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<?= $this->endSection('content'); ?>