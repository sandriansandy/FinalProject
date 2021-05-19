<?= $this->extend('guru/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel">
                <div class="panel-heading">
                    <h1 class="panel-title">Form Tambah Data</h1>
                </div>
                <form action="<?php base_url() ?>/admin/simpanNilai" method="POST" enctype="multipart/form-data">
                    <div class="panel-body">
                        <label for="NISN">NISN</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="NISN" type="text" id="NISN" name="NISN" required>
                        </div>
                        <br>
                        <label for="Nama">Nama</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="Nama" type="text" id="Nama" name="Nama" required>
                        </div>
                        <br>
                        <label>Mata Pelajaran</label>
                        <select name="mapel" id="mapel" class="form-control">
                            <?php foreach ($mapel as $m) : ?>
                                <option value="<?= $m['id_mapel']; ?>"><?= $m['Nama_mapel']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <br>
                        <label for="Semester">Semester</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="Semester" type="text" id="Semester" name="Semester" required>
                        </div>
                        <br>
                        <label for="Tugas 1">Tugas 1</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="Tugas 1" type="text" id="Tugas 1" name="Tugas 1" required>
                        </div>
                        <br>
                        <label for="Tugas 2">Tugas 2</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="Tugas 2" type="text" id="Tugas 2" name="Tugas 2" required>
                        </div>
                        <br>
                        <label for="UTS">UTS</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="UTS" type="text" id="UTS" name="UTS" required>
                        </div>
                        <br>
                        <label for="Tugas 3">Tugas 3</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="Tugas 3" type="text" id="Tugas 3" name="Tugas 3" required>
                        </div>
                        <br>
                        <label for="Tugas 4">Tugas 4</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="Tugas 4" type="text" id="Tugas 4" name="Tugas 4" required>
                        </div>
                        <br>
                        <label for="UAS">UAS</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="UAS" type="text" id="UAS" name="UAS" required>
                        </div>
                        <br>
                        <input type="submit" value="SUBMIT" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<?= $this->endSection('content'); ?>