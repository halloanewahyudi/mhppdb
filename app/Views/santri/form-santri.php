<?= $this->extend('layouts/response-layout'); ?>
<?= $this->Section('content'); ?>
<div class="col-lg-7 mx-auto py-5">
    <h2>Data  Santri</h2>
    <p>Lengkapi data berikut ini</p><hr>
    <form action="<?= $action; ?>" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Nama </label>
            <input type="text" class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Nama Lengkap</small>
        </div>
        <div class="row mb-3 ">
            <div class="col-lg">
                <label for="" class="form-label">NISN</label>
                <input type="text" class="form-control" name="nisn" id="nisn" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">NIS</label>
                <input type="text" class="form-control" name="nis" id="nis" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">NIK</label>
                <input type="text" class="form-control" name="nik" id="nik" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="row mb-3 ">
            <div class="col-lg">
                <label for="" class="form-label">No HP</label>
                <input type="number" class="form-control" name="no_hp" id="no_hp" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Nomer yang dapat di hubungi</small>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="divider py-4 d-block align-items-center"><span class="border  d-block"></span></div>
        <div class="row mb-3 ">
            <div class="col-lg">
                <label for="" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Tanggal Lahir</label>
                <input type="text" class="form-control datepicker" name="tanggal_lahir" id="tanggal_lahir" aria-describedby="helpId" placeholder="" autocomplete="off">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Jenis Kelamin</label>
                <div class="align-items-center d-flex pt-2">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="" value="Laki laki"> Laki laki
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="" value="Permpuan"> Perempuan
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3 ">
            <div class="col-lg">
                <label for="" class="form-label">Anak ke</label>
                <input type="number" class="form-control" name="anak_ke" id="anak_ke" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Jumlah Saudara</label>
                <input type="number" class="form-control" name="jumlah_saudara" id="jumlah_saudara" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Agama</label>
                <input type="text" class="form-control" name="agama" id="agama" aria-describedby="helpId" placeholder="">
            </div>
        </div>

        <div class="row mb-3 ">
            <div class="col-lg">
                <label for="" class="form-label">Cita cita</label>
                <input type="text" class="form-control" name="cita_cita" id="cita_cita" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Hobi</label>
                <input type="text" class="form-control" name="hobi" id="hobi" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="divider py-4 d-block align-items-center"><span class="border  d-block"></span></div>
        <div class="row">
            <div class="col-lg mb-3">
                <label for="" class="form-label">Alamat Lengkap</label>
                <textarea class="form-control" name="alamat_lengkap" id="alamat_lengkap" rows="3"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Desa/ kelurahan</label>
                <input type="text" class="form-control" name="desa_kelurahan" id="desa_kelurahan" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Kecamatan</label>
                <input type="text" class="form-control" name="kecamatan" id="kecamatan" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Kabupaten / Kota</label>
                <input type="text" class="form-control" name="kabupaten_kota" id="kabupaten_kota" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Provinsi</label>
                <input type="text" class="form-control" name="provinsi" id="provinsi" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg-3">
                <label for="" class="form-label">Kode Pos</label>
                <input type="text" class="form-control" name="kode_pos" id="kode_pos" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="divider py-4 d-block align-items-center"><span class="border  d-block"></span></div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Jenis Transportasi</label>
                <input type="text" class="form-control" name="jenis_transportasi" id="jenis_transportasi" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Transportasi yang di gunakan ke sekolah</small>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Jarak tempat Tinggal</label>
                <input type="text" class="form-control" name="jarak_tempat_tinggal" id="jarak_tempat_tinggal" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Jarak tempat tinggal dari rumah ke sekolah</small>
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Yang membiayai Sekolah</label>
                <input type="text" class="form-control" name="yang_membiayai_sekolah" id="yang_membiayai_sekolah" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Jarak tempat tinggal dari rumah ke sekolah</small>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label for="" class="form-label">Kenbutuhan Khusus</label>
                <input type="text" class="form-control" name="kebutuhan_khusus" id="kebutuhan_khusus" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Kenbutuhan Disabilitas</label>
                <input type="text" class="form-control" name="kebutuhan_disabilitas" id="kebutuhan_disabilitas" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Imunisasi</label>
                <input type="text" class="form-control" name="imunisasi" id="imunisasi" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Pra Sekolah</label>
                <input type="text" class="form-control" name="pra_sekolah" id="pra_sekolah" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-3">
                <label for="" class="form-label">Nomer KIP</label>
                <input type="text" class="form-control" name="nomer_kip" id="nomer_kip" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg-3">
                <label for="" class="form-label">Nomer KK</label>
                <input type="text" class="form-control" name="nomer_kk" id="nomer_kk" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-lg">
                <label for="" class="form-label">Nama Kepala keluarga</label>
                <input type="text" class="form-control" name="nama_kepala_keluarga" id="nama_kepala_keluarga" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="divider py-4 d-block align-items-center"><span class="border  d-block"></span></div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>

<?= $this->endSection(); ?>