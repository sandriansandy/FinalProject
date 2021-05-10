<?= $this->extend('siswa/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <p class="lead">Data Pelajaran</p>
                </div>
            </div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Mata Pelajaran</th>
                        <th>Jam Mulai</th>
                        <th>Jam Berakhir</th>
                        <th>Nama Guru</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- jadwal senin -->
                    <tr>
                        <td>Senin</td>
                        <td>Matematika Wajib</td>
                        <td>08:40</td>
                        <td>09:30</td>
                        <td>Subur Budiman</td>

                    </tr>
                    <tr>
                        <td>Senin</td>
                        <td>Fisika</td>
                        <td>10:00</td>
                        <td>11:30</td>
                        <td>Andi Ekunam</td>
                    </tr>
                    <tr>
                        <td>Senin</td>
                        <td>Kimia</td>
                        <td>13:00</td>
                        <td>14:30</td>
                        <td>Eko Edi Susilo</td>
                    </tr>
                    <tr>
                        <td>Senin</td>
                        <td>Biologi</td>
                        <td>14:30</td>
                        <td>16:00</td>
                        <td>Yanto Kocul</td>
                    </tr>
                    <!-- jadwal selasa -->
                    <tr>
                        <td>Selasa</td>
                        <td>Sejarah</td>
                        <td>07:00</td>
                        <td>08:40</td>
                        <td>Santoso Brewok</td>

                    </tr>
                    <tr>
                        <td>Selasa</td>
                        <td>PPKN</td>
                        <td>08:40</td>
                        <td>09:30</td>
                        <td>Yono Ceking</td>
                    </tr>
                    <tr>
                        <td>Selasa</td>
                        <td>Kewirausahaan</td>
                        <td>10:00</td>
                        <td>11:30</td>
                        <td>Patricia Yatmi</td>
                    </tr>
                    <tr>
                        <td>Selasa</td>
                        <td>Seni Budaya</td>
                        <td>13:00</td>
                        <td>14:30</td>
                        <td>Siti Paulus</td>
                    </tr>
                    <!-- jadwal rabu -->
                    <tr>
                        <td>Rabu</td>
                        <td>Bahasa Indonesia</td>
                        <td>07:00</td>
                        <td>08:40</td>
                        <td>Yatik Tumingse</td>

                    </tr>
                    <tr>
                        <td>Rabu</td>
                        <td>Bahasa Inggris</td>
                        <td>08:40</td>
                        <td>09:30</td>
                        <td>Wawan Waluyo</td>
                    </tr>
                    <tr>
                        <td>Rabu</td>
                        <td>Sastra Indonesia</td>
                        <td>10:00</td>
                        <td>11:30</td>
                        <td>Eren Proklamasi</td>
                    </tr>
                    <tr>
                        <td>Rabu</td>
                        <td>Fisika</td>
                        <td>13:00</td>
                        <td>14:30</td>
                        <td>Andi Ekunam</td>
                    </tr>
                    <!-- jadwal kamis -->
                    <tr>
                        <td>Kamis</td>
                        <td>Penjasorkes</td>
                        <td>07:00</td>
                        <td>08:40</td>
                        <td>Ika Yulianti</td>

                    </tr>
                    <tr>
                        <td>Kamis</td>
                        <td>TIK</td>
                        <td>08:40</td>
                        <td>09:30</td>
                        <td>Agus indihome</td>
                    </tr>
                    <tr>
                        <td>Kamis</td>
                        <td>Bahasa Inggris</td>
                        <td>10:00</td>
                        <td>11:30</td>
                        <td>Wawan Waluyo</td>
                    </tr>
                    <tr>
                        <td>Kamis</td>
                        <td>Seni Budaya</td>
                        <td>13:00</td>
                        <td>14:30</td>
                        <td>Siti Paulus</td>
                    </tr>
                    <!-- jadwal jumat -->
                    <tr>
                        <td>Jumat</td>
                        <td>Kimia</td>
                        <td>07:00</td>
                        <td>08:40</td>
                        <td>Eko Edi Susilo</td>

                    </tr>
                    <tr>
                        <td>Jumat</td>
                        <td>Biologi</td>
                        <td>08:40</td>
                        <td>09:30</td>
                        <td>Yanto Kocul</td>
                    </tr>
                    <tr>
                        <td>Jumat</td>
                        <td>Matematika Peminatan</td>
                        <td>10:00</td>
                        <td>11:00</td>
                        <td>Sutrisno Seloyo</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Hari</th>
                        <th>Mata Pelajaran</th>
                        <th>Jam Mulai</th>
                        <th>Jam Berakhir</th>
                        <th>Nama Guru</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<?= $this->endSection(); ?>