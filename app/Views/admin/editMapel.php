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
                <form action="<?php base_url() ?>/admin/updateMapel/<?= $mapel['id_mapel']; ?>" method="POST" enctype="multipart/form-data">
                    <div class="panel-body">
                        <label for="mapel">Nama Mapel</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="Nama" type="text" id="mapel" name="mapel" value="<?= $mapel['Nama_mapel']; ?>" required>
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