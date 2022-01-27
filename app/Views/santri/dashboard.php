<?= $this->extend('layouts/main') ?>
<?= $this->Section('content') ?>
<?php

use Myth\Auth\Commands\ListGroups;
use PHPUnit\TextUI\XmlConfiguration\Groups;
?>
<?= $this->extend('layouts/main'); ?>
<?= $this->Section('content'); ?>
<?php $db = \Config\Database::connect(); ?>
<div id="detailSantri">

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        Jika ada peserta yang sudah membayar dan belum dimasukan digroup PPDB Pesantren Minhajul Haq Mohon Konfirmasinya
        Ke nomor wa <br><strong>Contact Person PPDB Minhajul Haq <a href="https://wa.me/6285156574081">(085156574081)</a> </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        Bagi peserta PPDB yang mempunyai saudara yang telah menjadi santri Pesantren Minhajul Haq.
        Mohon untuk konfirmasinya ke Nomor Contact Person PPDB Minhajul Haq <strong> <a href="https://wa.me/6285156574081">(085156574081)</a> </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <p>

        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Proses Pendaftaran
        </button>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <ul class="list-unstyled">
                <li class="d-flex">
                    <span data-feather="edit" style="width:30px"> </span>
                    <span class="ml-2" style="list-style-type: lower-alpha;">
                        Mengisi formulir Pendaftaran Online
                        <ol> Data Santri</ol>
                        <ol> Sekolah Asal</ol>
                        <ol> Data Orang tua/Wali</ol>
                        <ol>Data Berkas</ol>
                    </span>
                </li>
                <li class="d-flex">
                    <span data-feather="credit-card" style="width:30px"></span>
                    <span class="ml-2">
                        Membayar Biaya Pendaftaran dan Upload bukti/struk pendaftaran
                    </span>
                </li>
                <li class="d-flex">
                    <span data-feather="check-square" style="width:30px"> </span>
                    <span class="ml-2">
                        Pembayaran akan diverifikasi oleh panitia PPDB, jika sudah terverifikasi maka akan muncul pembayaran sudah tervefirikasi/lunas.
                    </span>
                </li>
                <li class="d-flex">
                    <span data-feather="users" style="width:30px"> </span>
                    <span class="ml-2">
                        Nanti peserta akan dibuatkan group oleh panitia dan akan dihubungi oleh panitia terkait dengan test tilawah. (Mohon menunggu).
                    </span>
                </li>
                <li class="d-flex bg-primary bg-opacity-25 p-2 rounded">
                    <span data-feather="mic" style="width:30px"></span>
                    <span> <strong> info terkait proses selanjutnya akan diberitahukan melalui group Whatapps PPDB Minhajul Haq. Mohon untuk menunggu.</strong></span>
                </li>
            </ul>
        </div>
    </div>

    <div class="d-flex gap-5">
        <div>
            <span>Tangal</span> <br>
            <h5>12-10-2021</h5>
        </div>
        <div>
            <span>Jam</span> <br>
            <h5>08.00 - 12.00 WIB</h5>
        </div>
    </div>
    <hr class="my-2">
    <p>Untuk test kemampuan dasar, test karakteristik pribadi, wawancara tertulis calon santri, wawancara tertulis orang tua, dan wawancara tertulis kesehatan di lakukan melalui link berikut <a href="#" class="text-warning"> test</a></p>
    <p>
        diwajibkan bergabung di group whatsapp guna sosialisasi test alquran
    </p>
</div>
</div>

</div>

<?= $this->endSection(); ?>
<?= $this->endSection(); ?>