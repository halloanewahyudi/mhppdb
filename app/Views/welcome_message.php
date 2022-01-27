<?= $this->extend('layouts/homepage'); ?>
<?= $this->Section('content') ?>
<div class="d-flex align-items-center" style="min-height: 90vh;" >
<div class="row h-100 align-items-center my-auto ">
    <div class="col-lg-6 d-flex flex-column justify-content-center mb-3">
        <span class="fs-6">Pondok Pesantren </span>
        <h2 class="display-4"> MINHAJUL HAQ </h2>
        Selamat datang di aplikasi pendaftaran santri baru
        Sebelum membaca pastikakn anda membaca alur pandaftaran terlebih dahulu dan pilih jenjang yang kamu inginkan

        Demi kenyamanan dan kelancaran dalam pengisian formulir maka baiknya gunakan komputer atau laptop
    </div>

    <div class="col-lg-6 ">
        <div class="row">
            <div class="col-md-6">
                <div class="card bg-white text-start mb-3 border-start border-0 border-4 border-primary shadow">
                    <div class="card-body">
                        <a href="<?= base_url('reg-ra') ?>" class="text-decoration-none">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="ms-2 py-2 px-3 bg-primary rounded">
                                    <i class="fas fa-user text-warning"></i>
                                </div>
                                <h5 class="m-0 p-0">Daftar RA</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-white text-start mb-3 border-start border-0 border-4 border-warning shadow">
                    <div class="card-body">
                        <a href="<?= base_url('reg-mi') ?>" class="text-decoration-none">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="ms-2 py-2 px-3 bg-primary rounded">
                                    <i class="fas fa-user text-warning"></i>
                                </div>
                                <h5 class="m-0 p-0">Daftar MI</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-white text-start mb-3 border-start border-0 border-4 border-danger shadow">
                    <div class="card-body">
                        <a href="<?= base_url('reg-mts-putra') ?>" class="text-decoration-none">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="ms-2 py-2 px-3 bg-primary rounded">
                                    <i class="fas fa-user text-warning"></i>
                                </div>
                                <h5 class="m-0 p-0">Daftar MTS Putra</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-white text-start mb-3 border-start border-0 border-4 border-success shadow">
                    <div class="card-body">
                        <a href="<?= base_url('reg-mts-putri') ?>" class="text-decoration-none">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="ms-2 py-2 px-3 bg-primary rounded">
                                    <i class="fas fa-user text-warning"></i>
                                </div>
                                <h5 class="m-0 p-0">Daftar MTS Putri</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-white text-start mb-3 border-start border-0 border-4 border-info shadow">
                    <div class="card-body">
                        <a href="<?= base_url('reg-ma-putra') ?>" class="text-decoration-none">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="ms-2 py-2 px-3 bg-primary rounded">
                                    <i class="fas fa-user text-warning"></i>
                                </div>
                                <h5 class="m-0 p-0">Daftar MA Putra</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-white text-start mb-3 border-start border-0 border-4 border-secondary shadow">
                    <div class="card-body">
                        <a href="<?= base_url('reg-ma-putri') ?>" class="text-decoration-none">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="ms-2 py-2 px-3 bg-primary rounded">
                                    <i class="fas fa-user text-warning"></i>
                                </div>
                                <h5 class="m-0 p-0">Daftar MA Putri</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>
</div>

<?= $this->endSection(); ?>