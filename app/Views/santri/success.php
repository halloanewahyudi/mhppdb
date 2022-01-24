<?= $this->extend('layouts/main-test'); ?>
<?= $this->Section('content'); ?>
 <div class="col-lg-6 offset-lg-3 ">
     <div class="d-flex flex-column justify-content-center text-center vh-100">
       <h1><?= $judul?></h1>
       <p><?= $deskripsi ?></p>
        <a href="<?= base_url('/'); ?>" class="btn btn-success w-lg-25 mx-auto"> Lihat Profil</a>
     </div>
 </div>
<?= $this->endSection();?>