<?= $this->extend('admin/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel">
                <div class="panel-heading">
                    <h1 class="panel-title">Form Ubah Data</h1>
                </div>
                <form action="<?php base_url() ?>/admin/updateKelas/<?= $kelas['id_kelas']; ?>" method="POST" enctype="multipart/form-data">
                    <div class="panel-body">
                        <label for="kelas">Nama Kelas</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="Nama" type="text" id="kelas" name="kelas" value="<?= $kelas['nama_kelas']; ?>" required>
                        </div>
                        <label for="tahun_ajaran">Tahun Ajaran</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="Tahun Ajaran" type="text" id="tahun_ajaran" name="tahun_ajaran" value="<?= $kelas['tahun_ajaran']; ?>" required>
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