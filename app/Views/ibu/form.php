<?= $this->extend('layouts/homepage') ?>
<?= $this->section('content') ?>
<div class="col-lg-7 mx-auto py-5">
    <?php if (session()->getFlashdata('update')) : ?>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Ter update</h4>
            <p>Data santri telah ter update</p>
        </div>
    <?php endif; ?>
    <p>Silakan lengkapi data diri anda</p>
    <h5>Data Ibu</h5>
    <hr>
    <form action="<?= $action; ?>" method="post" data-validate>
        <div class="mb-3">
            <label for="" class="form-label">Nama Ibu</label>
            <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" value="<?= !empty($data_ibu['nama_ibu']) ? $data_ibu['nama_ibu'] : '' ?>" required>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Warga Negara </label>
                <input type="text" class="form-control" name="warga_negara_ibu" id="warga_negara_ibu" value="<?= !empty($data_ibu['warga_negara_ibu']) ? $data_ibu['warga_negara_ibu'] : '' ?>" required>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Status </label>
                <?php $options = [
                    'Hidup'  => 'Hidup',
                    'Sudah meniggal'    => 'Sudah meniggal',
                    'Tidak Serumah'  => 'Tidak Serumah',
                ];
                if (isset($data_ibu)) {
                    $selected = $data_ibu['status_ibu'];
                } else {
                    $selected = '';
                }
                echo form_dropdown('status_ibu', $options, $selected, ['class' => 'form-select', 'required' => 'required']);
                ?>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">NIK </label>
                <input type="text" class="form-control" name="nik_ibu" id="nik_ibu" value="<?= !empty($data_ibu['nik_ibu']) ? $data_ibu['nik_ibu'] : '' ?>" minlength="16" maxlength="16" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir_ibu" id="tempat_lahir_ibu" value="<?= !empty($data_ibu['tempat_lahir_ibu']) ? $data_ibu['tempat_lahir_ibu'] : '' ?>" required>
            </div>
            <div class="col-lg">
                <label for="" class="form-label ">Tanggal Lahir</label>
                <input type="text" class="form-control datepicker" name="tgl_lahir_ibu" id="tgl_lahir_ibu" value="<?= !empty($data_ibu['tgl_lahir_ibu']) ? $data_ibu['tgl_lahir_ibu'] : '' ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Pendidikan Terakhir</label>
                <?php $options = [
                    '' => 'Pilih',
                    'SD'  => 'SD',
                    'SMP'    => 'SMP',
                    'SMA'  => 'SMA',
                    'Perguruan Tinggi'  => 'Perguruan Tinggi',
                ];
                if (isset($data_ibu)) {
                    $selected = $data_ibu['pendidikan_ibu'];
                } else {
                    $selected = '';
                }
                echo form_dropdown('pendidikan_ibu', $options, $selected, ['class' => 'form-select', 'required' => 'required']);
                ?>
            </div>
            <div class="col-lg">
                <label for="" class="form-label datepicker">Pekerjaan ibu</label>
                <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" value="<?= !empty($data_ibu['pekerjaan_ibu']) ? $data_ibu['pekerjaan_ibu'] : '' ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Penghasilan Ibu</label>
                <?php $options = [
                    'none' => 'none',
                    'di bawah atau 5jt' => 'di bawah atau 5jt',
                    'di atas 5jt' => 'di atas 5jt',
                    'di atas 6jt' => 'di atas 6jt',
                    'di atas 9jt' => 'di atas 9jt',
                    'di atas 12jt' => 'di atas 12jt',
                    'di atas 15jt' => 'di atas 15jt',
                    'di atas 18jt' => 'di atas 18jt',
                    'di atas 21jt' => 'di atas 21jt',
                    'di atas 24jt' => 'di atas 24jt',
                    'di atas 25jt' => 'di atas 25jt',
                ];
                if (isset($data_ibu)) {
                    $selected = $data_ibu['penghasilan_ibu'];
                } else {
                    $selected = '';
                }
                echo form_dropdown('penghasilan_ibu', $options, $selected, ['id' => 'selectPenghasilan', 'class' => 'form-select', 'required' => 'required']);
                ?>
            </div>
            <div class="col-lg">
                <label for="" class="form-label datepicker">No HP ibu</label>
                <input type="number" class="form-control" name="no_hp_ibu" id="no_hp_ibu" value="<?= !empty($data_ibu['no_hp_ibu']) ? $data_ibu['no_hp_ibu'] : '' ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Tempat Tinggal Ibu</label>
                <?php $options = [
                    'Dalam Negri' => 'Dalam Negri',
                    'Luar Negri' => 'Luar Negri',
                ];
                if (isset($data_ibu)) {
                    $selected = $data_ibu['tempat_tinggal_ibu'];
                } else {
                    $selected = '';
                }
                echo form_dropdown('tempat_tinggal_ibu', $options, $selected, ['id' => '', 'class' => 'form-select', 'required' => 'required']);
                ?>
            </div>
            <div class="col-lg">
                <label for="" class="form-label ">Status Tempat Tinggal ibu</label>
                <?php $options = [
                    'Rumah Pribadi' => 'Rumah Pribadi',
                    'Rumah Sewa / Kontrak' => 'Rumah Sewa / Kontrak',
                    'Rumah Dinas' => 'Rumah Dinas',
                    'Lainya' => 'Lainya',
                ];
                if (isset($data_ibu)) {
                    $selected = $data_ibu['status_tempat_tinggal_ibu'];
                } else {
                    $selected = '';
                }
                echo form_dropdown('status_tempat_tinggal_ibu', $options, $selected, ['id' => '', 'class' => 'form-select', 'required' => 'required']);
                ?>
            </div>
        </div>
        <div class="row ">
            <div class="mb-3">
                <label for="" class="form-label">Alamat Lengkap</label>
                <textarea class="form-control" name="alamat_lengkap_ibu" id="alamat_lengkap_ibu" rows="3" required autocomplete="off"><?= !empty($data_ibu['alamat_lengkap_ibu']) ? $data_ibu['alamat_lengkap_ibu'] : '' ?></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Kelurahan</label>
                <input type="text" class="form-control" name="desa_kelurahan_ibu" id="desa_kelurahan_ibu" value=" <?= !empty($data_ibu['desa_kelurahan_ibu']) ? $data_ibu['desa_kelurahan_ibu'] : '' ?>" required>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Kecamatan</label>
                <input type="text" class="form-control" name="kecamatan_ibu" id="kecamatan_ibu" value=" <?= !empty($data_ibu['kecamatan_ibu']) ? $data_ibu['kecamatan_ibu'] : '' ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Kabupaten/ Kata</label>
                <input type="text" class="form-control" name="kabupaten_kota_ibu" id="kabupaten_kota_ibu" value=" <?= !empty($data_ibu['kabupaten_kota_ibu']) ? $data_ibu['kecamatan_ibu'] : '' ?>" required>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Provinsi</label>
                <input type="text" class="form-control" name="provinsi_ibu" id="provinsi_ibu" value=" <?= !empty($data_ibu['provinsi_ibu']) ? $data_ibu['provinsi_ibu'] : '' ?>" required>
            </div>
            <div class="col-lg-3">
                <label for="" class="form-label">Kode Pos</label>
                <input type="text" class="form-control" name="kode_pos_ibu" id="kode_pos_ibu" value=" <?= !empty($data_ibu['kode_pos_ibu']) ? $data_ibu['kode_pos_ibu'] : '' ?>">
            </div>
        </div>
        <div class="divider py-4 d-block align-items-center"><span class="border  d-block"></span></div>
        <div class="d-md-flex justify-content-between">
            <button class="btn btn-primary" type="submit">Submit</button>
            <div>
                <button class="btn btn-secondary" onclick="window.history.back();"><i class="fas fa-arrow-left"></i> Kembali</button>
                <?php if (!empty($data_ibu)) : ?>
                    <a href="<?= base_url('sekolah-asal/create'); ?>" class="btn btn-info text-white"> Selanjutnya <i class="fas fa-arrow-right"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>