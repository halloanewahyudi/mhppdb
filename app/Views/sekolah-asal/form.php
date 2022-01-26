<?= $this->extend('layouts/homepage') ?>
<?= $this->section('content') ?>
<div class="col-lg-7 mx-auto py-5">
    <?php if (session()->getFlashdata('update')) : ?>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Ter update</h4>
            <p>Data santri telah ter update</p>
        </div>
    <?php endif; ?>
    <h2>Data Ibu</h2>
    <p>Lengkapi data berikut ini</p>
    <hr>
    <form action="<?= $action; ?>" method="post" data-validate>
        <div class="row mb-3">
            <div class="col-lg-4">
                <label for="" class="form-label">Lulusan Dari </label>
                <?php $options = [
                    ''  => 'Pilih',
                    'SD'  => 'SD',
                    'MI'    => 'MI',
                    'Tidak Serumah'  => 'Tidak Serumah',
                ];
                if (isset($data_sekolah_asal)) {
                    $selected = $data_sekolah_asal['lulus_dari'];
                } else {
                    $selected = '';
                }
                echo form_dropdown('lulus_dari', $options, $selected, ['class' => 'form-select', 'required' => 'required']);
                ?>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Nama Sekolah Sebelumnya</label>
                <input type="text" class="form-control" name="nama_sekolah" id="" aria-describedby="helpId" value="<?= !empty($data_sekolah_asal['nama_sekolah']) ? $data_sekolah_asal['nama_sekolah'] : '' ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Alamat Sekolah Sebelumnya</label>
                <textarea class="form-control" name="alamat_sekolah" id="alamat_sekolah" rows="3" required autocomplete="off"><?= !empty($data_sekolah_asal['alamat_sekolah']) ? $data_sekolah_asal['alamat_sekolah'] : '' ?></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">No Kontak Sekolah</label>
                <input type="number" class="form-control" name="no_kontak_sekolah" id="no_kontak_sekolah" value="<?= !empty($data_sekolah_asal['no_kontak_sekolah']) ? $data_sekolah_asal['no_kontak_sekolah'] : '' ?>">
            </div>
            <div class="col-lg">
                <label for="" class="form-label"> NPSN </label>
                <input type="number" class="form-control" name="npsn" id="npsn" value="<?= !empty($data_sekolah_asal['npsn']) ? $data_sekolah_asal['npsn'] : '' ?>">
                <small id="helpId" class="form-text text-muted">Nomor Pokok Sekolah Nasional</small>
            </div>
            <div class="col-lg">
                <label for="" class="form-label"> NSM</label>
                <input type="number" class="form-control" name="nsm" id="nsm" value="<?= !empty($data_sekolah_asal['nsm']) ? $data_sekolah_asal['nsm'] : '' ?>">
                <small id="helpId" class="form-text text-muted">Nomor Statistik Madrasah</small>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Nomor Peserta UN SD/MI</label>
                <input type="number" class="form-control" name="no_peserta_un" id="no_peserta_un" value="<?= !empty($data_sekolah_asal['no_peserta_un']) ? $data_sekolah_asal['no_peserta_un'] : '' ?>">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Nomor SKHUN SD/MI</label>
                <input type="number" class="form-control" name="no_skhun" id="no_skhun" value="<?= !empty($data_sekolah_asal['no_skhun']) ? $data_sekolah_asal['no_skhun'] : '' ?>">
   
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">No Seri Ijazah</label>
                <input type="number" class="form-control" name="no_seri_ijazah" id="no_seri_ijazah" value="<?= !empty($data_sekolah_asal['no_seri_ijazah']) ? $data_sekolah_asal['no_seri_ijazah'] : '' ?>">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Total Nilai UN SD/MI</label>
                <input type="number" class="form-control" name="total_nilai_un" id="total_nilai_un" value="<?= !empty($data_sekolah_asal['total_nilai_un']) ? $data_sekolah_asal['total_nilai_un'] : '' ?>">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Tanggal Lulus Sekolah</label>
                <input type="text" class="form-control datepicker" name="tangal_lulus_sekolah" id="tangal_lulus_sekolah" value="<?= !empty($data_sekolah_asal['tangal_lulus_sekolah']) ? $data_sekolah_asal['tangal_lulus_sekolah'] : '' ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?= $this->endSection(); ?>
