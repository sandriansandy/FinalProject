<?= $this->extend('siswa/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <img src="../assets/img/profil_siswa/<?= $identitas['foto']; ?>" alt="" style="height: 8cm; width: 6cm;">
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    <table style="margin-bottom: 30px;">
                        <thead>
                            <h3>Data Pribadi</h3>
                        </thead>
                        <tr>
                            <td>NISN </td>
                            <td>:</td>
                            <td> <?= $identitas['NISN']; ?></td>
                        </tr>
                        <tr>
                            <td>Nama </td>
                            <td>:</td>
                            <td> <?= $identitas['Nama']; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin </td>
                            <td>:</td>
                            <td>Laki-laki</td>
                        </tr>
                        <tr>
                            <td>Jurusan </td>
                            <td>:</td>
                            <td>MIPA</td>
                        </tr>
                        <tr>
                            <td>Angkatan </td>
                            <td>:</td>
                            <td>2018</td>
                        </tr>
                        <tr>
                            <td>Status </td>
                            <td>:</td>
                            <td>Aktif</td>
                        </tr>
                        <tr>
                            <td>Alamat </td>
                            <td>:</td>
                            <td>Jl. Suka-suka 45, Sukasari, Palembang</td>
                        </tr>
                        <tr>
                            <td>Diterima di Sekolah </td>
                            <td>:</td>
                            <td>6 Juni 2018</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<?= $this->endSection(); ?>