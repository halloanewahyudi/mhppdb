<?= $this->extend('layouts/homepage'); ?>
<?= $this->Section('content'); ?>
<div class="col-lg-7 mx-auto py-5">
    <?php if (session()->getFlashdata('update')) : ?>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Ter update</h4>
            <p>Data santri telah ter update</p>
        </div>
    <?php endif; ?>
    <p>Silakan lengkapi data diri anda</p>
    <h5>Data Santri</h5>
    <hr>
    <form action="<?= $action; ?>" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Nama Calon Santri </label>
            <input type="text" class="form-control" name="nama" id="" value="<?= !empty($data_santri['nama']) ? $data_santri['nama'] : '' ?>" required>
            <small id="helpId" class="form-text text-muted">Nama Lengkap</small>
        </div>
        <div class="row mb-3 ">
            <div class="col-lg">
                <label for="" class="form-label">NISN</label>
                <input type="text" class="form-control" name="nisn" id="nisn" value="<?= !empty($data_santri['nisn']) ? $data_santri['nisn'] : '' ?>" required>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">NIS</label>
                <input type="text" class="form-control" name="nis" id="nis" value="<?= !empty($data_santri['nis']) ? $data_santri['nis'] : '' ?>" required>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">NIK</label>
                <input type="text" class="form-control" name="nik" id="nik" value="<?= !empty($data_santri['nik']) ? $data_santri['nik'] : '' ?>"  minlength="16" maxlength="16" required>
            </div>
        </div>
        <div class="row mb-3 ">
            <div class="col-lg">
                <label for="" class="form-label">No HP</label>
                <input type="number" class="form-control" name="no_hp" id="no_hp" value="<?= !empty($data_santri['no_hp']) ? $data_santri['no_hp'] : '' ?>" required>
                <small id="helpId" class="form-text text-muted">Nomer yang dapat di hubungi</small>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?= !empty($data_santri['email']) ? $data_santri['email'] : '' ?>">
            </div>
        </div>
        <div class="divider py-4 d-block align-items-center"><span class="border  d-block"></span></div>
        <div class="row mb-3 ">
            <div class="col-lg">
                <label for="" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?= !empty($data_santri['tempat_lahir']) ? $data_santri['tempat_lahir'] : '' ?>" required>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Tanggal Lahir</label>
                <input type="text" class="form-control datepicker" name="tanggal_lahir" id="tanggal_lahir" value="<?= !empty($data_santri['tanggal_lahir']) ? $data_santri['tanggal_lahir'] : '' ?>" autocomplete="off" required>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Jenis Kelamin</label>
                <div class="align-items-center d-flex pt-2 ">
                    <div class="form-check form-check-inline m-0 ps-2">
                        <label class="form-check-label">
                        <input type="radio" name="jenis_kelamin" value="Laki laki" <?php if(!empty($data_santri['jenis_kelamin']))  echo ($data_santri['jenis_kelamin'] == 'Laki laki' ? ' checked' : ''); ?> > Laki laki </label>
                    </div>
                    <div class="form-check form-check-inline m-0 ps-2">
                        <label class="form-check-label">
                        <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if(!empty($data_santri['jenis_kelamin']))  echo ($data_santri['jenis_kelamin'] == 'Perempuan' ? ' checked' : ''); ?> > Perempuan
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3 ">
            <div class="col-lg">
                <label for="" class="form-label">Anak ke</label>
                <input type="number" class="form-control" name="anak_ke" id="anak_ke" value="<?= !empty($data_santri['anak_ke']) ? $data_santri['anak_ke'] : '' ?>">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Jumlah Saudara</label>
                <input type="number" class="form-control" name="jumlah_saudara" id="jumlah_saudara" value="<?= !empty($data_santri['jumlah_saudara']) ? $data_santri['jumlah_saudara'] : '' ?>">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Agama</label>
                <?php
                $options = [
                    'Islam'  => 'Islam',
                    'Kristen'    => 'Kristen',
                    'Katolik'  => 'Katolik',
                    'Hindu' => 'Hindu',
                    'Budha' => 'Budha',
                    'Konghucu' => 'Konghucu',
                ];
                if (isset($data_santri)) {
                    $selected = $data_santri['agama'];
                } else {
                    $selected = 'Islam';
                }
                echo form_dropdown('agama', $options, 'Islam', array('class' => 'form-select', 'required'=>'required'));
                ?>
            </div>
        </div>

        <div class="row mb-3 ">
            <div class="col-lg">
                <label for="" class="form-label">Cita cita</label>
                <input type="text" class="form-control" name="cita_cita" id="cita_cita" value="<?= !empty($data_santri['cita_cita']) ? $data_santri['cita_cita'] : '' ?>" required>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Hobi</label>
                <input type="text" class="form-control" name="hobi" id="hobi" value="<?= !empty($data_santri['hobi']) ? $data_santri['hobi'] : '' ?>" required>
            </div>
        </div>
        <div class="divider py-4 d-block align-items-center"><span class="border  d-block"></span></div>
        <div class="row">
            <div class="col-lg mb-3">
                <label for="" class="form-label">Alamat Lengkap</label>
                <textarea class="form-control" name="alamat_lengkap" id="alamat_lengkap" rows="3" required><?= !empty($data_santri['alamat_lengkap']) ? $data_santri['alamat_lengkap'] : '' ?></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Desa/ kelurahan</label>
                <input type="text" class="form-control" name="desa_kelurahan" id="desa_kelurahan" value="<?= !empty($data_santri['desa_kelurahan']) ? $data_santri['desa_kelurahan'] : '' ?>" required>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Kecamatan</label>
                <input type="text" class="form-control" name="kecamatan" id="kecamatan" value="<?= !empty($data_santri['kecamatan']) ? $data_santri['kecamatan'] : '' ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Kabupaten / Kota</label>
                <input type="text" class="form-control" name="kabupaten_kota" id="kabupaten_kota" value="<?= !empty($data_santri['kabupaten_kota']) ? $data_santri['kabupaten_kota'] : '' ?>" required>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Provinsi</label>
                <input type="text" class="form-control" name="provinsi" id="provinsi" value="<?= !empty($data_santri['provinsi']) ? $data_santri['provinsi'] : '' ?>" required>
            </div>
            <div class="col-lg-3">
                <label for="" class="form-label">Kode Pos</label>
                <input type="text" class="form-control" name="kode_pos" id="kode_pos" value="<?= !empty($data_santri['kode_pos']) ? $data_santri['kode_pos'] : '' ?>">
            </div>
        </div>
        <div class="divider py-4 d-block align-items-center"><span class="border  d-block"></span></div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Jenis Transportasi</label>
                <?php
                $options = [
                    '' => 'Pilih ',
                    'Mobil Pribadi'  => 'Mobil Pribadi',
                    'Motor Pribadi'  => 'Motor Pribadi',
                    'Kendaraan Umum'  => 'Kendaraan Umum',
                    'Jalan Kaki' => 'Jalan Kaki',
                    'Lainya' => 'Lainya',
                ];
                if (isset($data_santri)) {
                    $selected = $data_santri['jenis_transportasi'];
                } else {
                    $selected = '';
                }
                echo form_dropdown('jenis_transportasi', $options, $selected, array('class' => 'form-select','required'=>'required'));
                ?>
                <small id="helpId" class="form-text text-muted">Transportasi yang di gunakan ke sekolah</small>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Jarak tempat Tinggal</label>
                <?php
                $options = [
                    '' => 'Pilih ',
                    'Kurang dari 5 Km'  => 'Kurang dari 5 Km',
                    'Lebih dari 5 Km'  => 'Lebih dari 5 Km',
                    'Kurang dari 15 Km'  => 'Kurang dari 15 Km',
                    'Lebih dari 15 Km'  => 'Lebih dari 15 Km',
                    'Kurang dari 30 Km'  => 'Kurang dari 30 Km',
                    'Lebih dari 30 Km'  => 'Lebih dari 30 Km',
                ];
                if (isset($data_santri)) {
                    $selected = $data_santri['jarak_tempat_tinggal'];
                } else {
                    $selected = '';
                }
                echo form_dropdown('jarak_tempat_tinggal', $options,$selected, array('class' => 'form-select', 'required'=>'required'));
                ?>
                <small id="helpId" class="form-text text-muted">Jarak tempat tinggal dari rumah ke sekolah</small>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Yang membiayai Sekolah</label>
                <?php
                $options = [
                    '' => 'Pilih ',
                    'Ayah'  => 'Ayah',
                    'Ibu'  => 'Ibu',
                    'Orang Tua (angkat)'  => 'Orang Tua (angkat)',
                    'Beasiwa'  => 'Beasiwa',
                    'Lainya'  => 'Lainya',
                ];
                if (isset($data_santri)) {
                    $selected = $data_santri['yang_membiayai_sekolah'];
                } else {
                    $selected = '';
                }
                echo form_dropdown('yang_membiayai_sekolah', $options, $selected, array('class' => 'form-select', 'required'=>'required'));
                ?>
                <small id="helpId" class="form-text text-muted">Jarak tempat tinggal dari rumah ke sekolah</small>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Kenbutuhan Khusus</label> <br>
                <div class="form-check form-check-inline m-0 ps-2">
                    <label class="form-check-label">
                    <input type="radio" name="kebutuhan_khusus" value="Tidak"<?php if(!empty($data_santri['kebutuhan_khusus'])) echo ($data_santri['kebutuhan_khusus'] == 'Tidak' ? ' checked' : ''); ?>> Tidak
                    </label>
                </div>
                <div class="form-check form-check-inline m-0 ps-2">
                    <label class="form-check-label">
                    <input type="radio" name="kebutuhan_khusus" value="Ya"<?php if(!empty($data_santri['kebutuhan_khusus']))  echo ($data_santri['kebutuhan_khusus'] == 'Ya' ? ' checked' : ''); ?>> Ya
                 </label>
                </div>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Kenbutuhan Disabilitas</label> <br>
                <div class="form-check form-check-inline m-0 ps-2">
                    <label class="form-check-label">
                    <input type="radio" name="kebutuhan_disabilitas" value="Tidak"<?php if(!empty($data_santri['kebutuhan_disabilitas']))  echo ($data_santri['kebutuhan_disabilitas'] == 'Tidak' ? ' checked' : ''); ?>> Tidak
                    </label>
                </div>
                <div class="form-check form-check-inline m-0 ps-2">
                    <label class="form-check-label">
                    <input type="radio" name="kebutuhan_disabilitas" value="Ya"<?php if(!empty($data_santri['kebutuhan_disabilitas']))  echo ($data_santri['kebutuhan_disabilitas'] == 'Ya' ? ' checked' : ''); ?>> Ya
                 </label>
                </div>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Imunisasi</label>
                <input type="text" class="form-control" name="imunisasi" id="imunisasi" placeholder="Hepatitis B, BCG, DPT, Polio, Campak
" value="<?= !empty($data_santri['imunisasi']) ? $data_santri['imunisasi'] : '' ?>">
            </div>
           
        </div>
        <div class="row mb-3">
        <div class="col-lg">
                <label for="" class="form-label">Pra Sekolah</label>
                <?php
                $options = [
                    '' => 'Pilih ',
                    'Pernah TK'  =>  'Pernah TK',
                    'Play Grouup'  => 'Play Grouup',
                    'Lainya'  => 'Lainya',
                ];
                if (isset($data_santri)) {
                    $selected = $data_santri['pra_sekolah'];
                } else {
                    $selected = '';
                }
                echo form_dropdown('pra_sekolah', $options,  $selected, array('class' => 'form-select'));
                ?>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Nomer KIP</label>
                <input type="number" class="form-control" name="nomer_kip" id="nomer_kip" value="<?= !empty($data_santri['nomer_kip']) ? $data_santri['nomer_kip'] : '' ?>">
                <small class="form-text text-muted">
                    Silakan isi "tidak ada" apabila tidak ada
                </small>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Nomer KK</label>
                <input type="number" class="form-control" name="nomer_kk" id="nomer_kk" value="<?= !empty($data_santri['nomer_kk']) ? $data_santri['nomer_kk'] : '' ?>" required>
            </div>
            
        </div>
        <div class="row mb-3">
        <div class="col-lg">
                <label for="" class="form-label">Nama Kepala keluarga</label>
                <input type="text" class="form-control" name="nama_kepala_keluarga" id="nama_kepala_keluarga" value="<?= !empty($data_santri['nama_kepala_keluarga']) ? $data_santri['nama_kepala_keluarga'] : '' ?>" required>
            </div>
        </div>
        <div class="divider py-4 d-block align-items-center"><span class="border  d-block"></span></div>
        <div class="d-flex justify-content-between">
        <button class="btn btn-primary" type="submit">Submit</button>
        <?php if(!empty($data_santri)): ?>
            <a href="<?= base_url('ayah/create'); ?>" class="btn btn-info text-white"> Selanjutnya <i class="fas fa-arrow-right"></i></a>
            <?php endif; ?>
        </div>
       
    </form>
</div>

<?= $this->endSection(); ?>