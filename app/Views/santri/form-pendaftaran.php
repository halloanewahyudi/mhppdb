<?= $this->extend('layouts/main-test'); ?>
<?= $this->Section('content'); ?>
<div class="col-lg-8">
    <form action="" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama" placeholder="" value="<?= !empty($data_santri['nama']) ? $data_santri['nama'] : '' ?>" required>
            <small id="helpId" class="form-text text-muted">Nama Lengkap Siswa (Sesuai Ijazah)</small>
        </div>
        <div class="row g-2">
            <div class="col-md">
                <div class="mb-3">
                    <label for="nisn" class="form-label">NISN (Nomor Induk Siswa Nasional)</label>
                    <input type="text" class="form-control" name="nisn" id="" aria-describedby="nisn" placeholder="" value="<?= !empty($data_santri['nisn']) ? $data_santri['nisn'] : '' ?>" required>
                </div>
            </div>
            <div class="col-md">
                <div class="mb-3">
                    <label for="" class="form-label">NIK</label>
                    <input type="text" class="form-control" name="nik" id="nik" aria-describedby="nik" placeholder="" value="<?= !empty($data_santri['nik']) ? $data_santri['nik'] : '' ?>" required>
                    <small id="helpId" class="form-text text-muted">Nomor Induk Kependudukan Siswa (NIK yang ada di kartu keluarga)
                    </small>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md">
                <div class="mb-3">
                    <label for="nisn" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="" aria-describedby="tempat_lahir" placeholder="" value="<?= !empty($data_santri['tempat_lahir']) ? $data_santri['tempat_lahir'] : '' ?>" required>
                </div>
            </div>
            <div class="col-md">
                <div class="mb-3">
                    <label for="" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" aria-describedby="tanggal_lahir" placeholder="" value="<?= !empty($data_santri['tanggal_lahir']) ? $data_santri['tanggal_lahir'] : '' ?>" required>
                    <small id="" class="form-text text-muted">Nomor Induk Kependudukan Siswa (NIK yang ada di kartu keluarga)
                    </small>
                </div>
            </div>
            <div class="col-md">
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="jenis_kalamin" id="" value="Laki-laki"> Laki-laki
                </label>
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="jenis_kalamin" id="" value="Perempuan"> Perempuan
                </label>
            </div>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>