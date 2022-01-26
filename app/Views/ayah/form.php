<?= $this->extend('layouts/homepage') ?>
<?= $this->section('content') ?>
<div class="col-lg-7 mx-auto py-5">
<?php if (session()->getFlashdata('update')) : ?>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Ter update</h4>
            <p>Data santri telah ter update</p>
        </div>
    <?php endif; ?>
    <h2>Data Ayah</h2>
    <p>Lengkapi data berikut ini</p>
    <hr>
    <form action="<?= $action; ?>" method="post" data-validate>
        <div class="mb-3">
            <label for="" class="form-label">Nama Ayah</label>
            <input type="text" class="form-control" name="nama_ayah" id="nama_ayah"  value="<?= !empty($data_ayah['nama_ayah']) ? $data_ayah['nama_ayah'] : '' ?>" required>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Warga Negara </label>
                <input type="text" class="form-control" name="warga_negara_ayah" id="warga_negara_ayah"  value="<?= !empty($data_ayah['warga_negara_ayah']) ? $data_ayah['warga_negara_ayah'] : '' ?>" required>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Status </label>
                <?php  $options = [
                        'Hidup'  => 'Hidup',
                        'Sudah meniggal'    => 'Sudah meniggal',
                        'Tidak Serumah'  => 'Tidak Serumah',
                    ];
                if(isset($data_ayah)){
                    $selected = $data_ayah['status_ayah'];
                }else{
                    $selected = '';
                }
                echo form_dropdown('status_ayah', $options,$selected,['class'=>'form-select', 'required'=>'required']);
                ?>

            </div>
            <div class="col-lg">
                <label for="" class="form-label">NIK </label>
                <input type="text" class="form-control" name="nik_ayah" id="nik_ayah"  value="<?= !empty($data_ayah['nik_ayah']) ? $data_ayah['nik_ayah'] : '' ?>" minlength="16" maxlength="16"  required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir_ayah" id="tempat_lahir_ayah" value="<?= !empty($data_ayah['tempat_lahir_ayah']) ? $data_ayah['tempat_lahir_ayah'] : '' ?>" required>
            </div>
            <div class="col-lg">
                <label for="" class="form-label ">Tanggal Lahir</label>
                <input type="text" class="form-control datepicker" name="tgl_lahir_ayah" id="tgl_lahir_ayah"  value="<?= !empty($data_ayah['tgl_lahir_ayah']) ? $data_ayah['tgl_lahir_ayah'] : '' ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Pendidikan Terakhir</label>
                <?php $options = [
                    ''=>'Pilih',
                    'SD'  => 'SD',
                    'SMP'    => 'SMP',
                    'SMA'  => 'SMA',
                    'Perguruan Tinggi'  => 'Perguruan Tinggi',
                ];
                if (isset($data_ayah)) {
                    $selected = $data_ayah['pendidikan_ayah'];
                } else {
                    $selected = '';
                }
                echo form_dropdown('pendidikan_ayah', $options, $selected, ['class' => 'form-select','required'=>'required']);
                ?>
            </div>
            <div class="col-lg">
                <label for="" class="form-label datepicker">Pekerjaan Ayah</label>
                <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" value="<?= !empty($data_ayah['pekerjaan_ayah']) ? $data_ayah['pekerjaan_ayah'] : '' ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Penghasilan Ayah</label>
                <?php  $options = [
                        'none'=> 'none',
                        'di bawah atau 5jt' => 'di bawah atau 5jt',
                        'di atas 5jt' => 'di atas 5jt',
                        'di atas 6jt'=>'di atas 6jt',
                        'di atas 9jt'=> 'di atas 9jt',
                        'di atas 12jt'=>'di atas 12jt',
                        'di atas 15jt' =>'di atas 15jt',
                        'di atas 18jt' =>'di atas 18jt',
                        'di atas 21jt' => 'di atas 21jt',
                        'di atas 24jt' => 'di atas 24jt',
                        'di atas 25jt' => 'di atas 25jt',
                    ];
                if(isset($data_ayah)){
                    $selected = $data_ayah['penghasilan_ayah'];
                }else{
                    $selected = '';
                }
                echo form_dropdown('penghasilan_ayah', $options,$selected,['id'=>'selectPenghasilan','class'=>'form-select','required'=>'required']); 
                ?>
            </div>
            <div class="col-lg">
                <label for="" class="form-label datepicker">No HP Ayah</label>
                <input type="number" class="form-control" name="no_hp_ayah" id="no_hp_ayah" value="<?= !empty($data_ayah['no_hp_ayah']) ? $data_ayah['no_hp_ayah'] : '' ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Tempat Tinggal Ayah</label>
                <?php  $options = [
                        'Dalam Negri'=> 'Dalam Negri',
                        'Luar Negri'=> 'Luar Negri',
                    ];
                if(isset($data_ayah)){
                    $selected = $data_ayah['tempat_tinggal_ayah'];
                }else{
                    $selected = '';
                }
                echo form_dropdown('tempat_tinggal_ayah', $options,$selected,['id'=>'','class'=>'form-select','required'=>'required']); 
                ?>
            </div>
            <div class="col-lg">
                <label for="" class="form-label ">Status Tempat Tinggal Ayah</label>
                <?php  $options = [
                        'Rumah Pribadi'=> 'Rumah Pribadi',
                        'Rumah Sewa / Kontrak'=> 'Rumah Sewa / Kontrak',
                        'Rumah Dinas'=> 'Rumah Dinas',
                        'Lainya'=> 'Lainya',
                    ];
                if(isset($data_ayah)){
                    $selected = $data_ayah['status_tempat_tinggal_ayah'];
                }else{
                    $selected = '';
                }
                echo form_dropdown('status_tempat_tinggal_ayah', $options,$selected,['id'=>'','class'=>'form-select','required'=>'required']); 
                ?>
            </div>
        </div>
        <div class="row ">
            <div class="mb-3">
                <label for="" class="form-label">Alamat Lengkap</label>
                <textarea class="form-control" name="alamat_lengkap_ayah" id="alamat_lengkap_ayah" rows="3" required ><?= !empty($data_ayah['alamat_lengkap_ayah']) ? $data_ayah['alamat_lengkap_ayah'] : '' ?></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Kelurahan</label>
                <input type="text" class="form-control" name="desa_kelurahan_ayah" id="desa_kelurahan_ayah"  value=" <?= !empty($data_ayah['desa_kelurahan_ayah']) ? $data_ayah['desa_kelurahan_ayah'] : '' ?>" required>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Kecamatan</label>
                <input type="text" class="form-control" name="kecamatan_ayah" id="kecamatan_ayah"  value=" <?= !empty($data_ayah['kecamatan_ayah']) ? $data_ayah['kecamatan_ayah'] : '' ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Kabupaten/ Kata</label>
                <input type="text" class="form-control" name="kabupaten_kota_ayah" id="kabupaten_kota_ayah"  value=" <?= !empty($data_ayah['kabupaten_kota_ayah']) ? $data_ayah['kecamatan_ayah'] : '' ?>" required>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Provinsi</label>
                <input type="text" class="form-control" name="provinsi_ayah" id="provinsi_ayah"  value=" <?= !empty($data_ayah['provinsi_ayah']) ? $data_ayah['provinsi_ayah'] : '' ?>" required>
            </div>
            <div class="col-lg-3">
                <label for="" class="form-label">Kode Pos</label>
                <input type="text" class="form-control" name="kode_pos_ayah" id="kode_pos_ayah" value=" <?= !empty($data_ayah['kode_pos_ayah']) ? $data_ayah['kode_pos_ayah'] : '' ?>">
            </div>
        </div>
        <div class="divider py-4 d-block align-items-center"><span class="border  d-block"></span></div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>
<?= $this->endSection(); ?>