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
                <form action="<?php base_url() ?>/admin/updateJadwal/<?= $jadwal['id_jadwal']; ?>" method="POST" enctype="multipart/form-data">
                    <div class="panel-body">
                        <label for="Mapel">Mata Pelajaran</label>
                        <select class="form-control" name="mapel">
                            <?php foreach ($mapel as $m) : ?>
                                <option value="<?= $m['id_mapel'] ?>"><?= $m['Nama_mapel'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <br>
                        <label for="Kelas">Kelas</label>
                        <select class="form-control" name="kelas">
                            <?php foreach ($kelas as $kel) : ?>
                                <option value="<?= $kel['id_kelas'] ?>"><?= $kel['nama_kelas'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <br>
                        <label for="Nama">Nama Guru</label>
                        <select class="form-control" name="nama_guru">
                            <?php foreach ($identitas as $i) : ?>
                                <option value="<?= $i['NIP'] ?>"><?= $i['nama_guru'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <br>
                        <label for="hari">Hari</label>
                        <select class="form-control" name="hari">
                            <option>Senin</option>
                            <option>Selasa</option>
                            <option>Rabu</option>
                            <option>Kamis</option>
                            <option>Jumat</option>
                        </select>
                        <br>
                        <label for="jam_mulai">Jam Mulai</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="HH:MM:SS" type="text" id="jam_mulai" name="jam_mulai" value="<?= $jadwal['jam_mulai']; ?>" required>
                        </div>
                        <br>
                        <label for="jam_selesai">Jam Berakhir</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="HH:MM:SS" type="text" id="jam_selesai" name="jam_selesai" value="<?= $jadwal['jam_selesai']; ?>" required>
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