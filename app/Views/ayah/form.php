<?= $this->extend('layouts/homepage') ?>
<?= $this->section('content') ?>
<div class="col-lg-7 mx-auto py-5">
    <h2>Data Ayah</h2>
    <p>Lengkapi data berikut ini</p>
    <hr>
    <form action="" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Nama Ayah</label>
            <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" aria-describedby="helpId" placeholder="">
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Warga Negara </label>
                <input type="text" class="form-control" name="warga_negara_ayah" id="warga_negara_ayah" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Status </label>
                <input type="text" class="form-control" name="status_ayah" id="status_ayah" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">NIK </label>
                <input type="text" class="form-control" name="nik_ayah" id="nik_ayah" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir_ayah" id="tempat_lahir_ayah" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg">
                <label for="" class="form-label datepicker">Tanggal Lahir</label>
                <input type="text" class="form-control" name="tgl_lahir_ayah" id="tgl_lahir_ayah" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Pendidikan Terakhir</label>
                <input type="text" class="form-control" name="pendidikan_ayah" id="pendidikan_ayah" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg">
                <label for="" class="form-label datepicker">Pekerjaan Ayah</label>
                <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Penghasilan Ayah</label>
                <input type="text" class="form-control" name="penghasilan_ayah" id="penghasilan_ayah" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg">
                <label for="" class="form-label datepicker">No HP Ayah</label>
                <input type="text" class="form-control" name="no_hp_ayah" id="no_hp_ayah" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Tempat Tinggal Ayah</label>
                <input type="text" class="form-control" name="tempat_tinggal_ayah" id="tempat_tinggal_ayah" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg">
                <label for="" class="form-label datepicker">Status Tempat Tinggal Ayah</label>
                <input type="text" class="form-control" name="status_tempat_tinggal_ayah" id="status_tempat_tinggal_ayah" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="row ">
            <div class="mb-3">
                <label for="" class="form-label">Alamat Lengkap</label>
                <textarea class="form-control" name="alamat_lengkap_ayah" id="alamat_lengkap_ayah" rows="3"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Kelurahan</label>
                <input type="text" class="form-control" name="desa_kelurahan_ayah" id="desa_kelurahan_ayah" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Kecamatan</label>
                <input type="text" class="form-control" name="kecamatan_ayah" id="kecamatan_ayah" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Kabupaten/ Kata</label>
                <input type="text" class="form-control" name="kabupaten_kota_ayah" id="kabupaten_kota_ayah" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Provinsi</label>
                <input type="text" class="form-control" name="provinsi_ayah" id="provinsi_ayah" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg-3">
                <label for="" class="form-label">Kode Pos</label>
                <input type="text" class="form-control" name="kode_pos_ayah" id="kode_pos_ayah" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="divider py-4 d-block align-items-center"><span class="border  d-block"></span></div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>
<?= $this->endSection(); ?>