<?= $this->extend('layouts/main-test'); ?>
<?= $this->Section('content'); ?>
<div class="col-lg-8">
    <form action="" method="post">
        <div class="row mb-3">
            <div class="col-md">
                <label for="" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama" value="<?= !empty($data_santri['nama']) ? $data_santri['nama'] : '' ?>" required>
                <small id="helpId" class="form-text text-muted">Nama Lengkap Siswa (Sesuai Ijazah)</small>
            </div>
        </div>
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="nisn" class="form-label">NISN (Nomor Induk Siswa Nasional)</label>
                <input type="text" class="form-control" name="nisn" id="" aria-describedby="nisn" value="<?= !empty($data_santri['nisn']) ? $data_santri['nisn'] : '' ?>" required>
            </div>
            <div class="col-md">
                <label for="" class="form-label">NIK</label>
                <input type="text" class="form-control" name="nik" id="nik" aria-describedby="nik" value="<?= !empty($data_santri['nik']) ? $data_santri['nik'] : '' ?>" required>
                <small id="helpId" class="form-text text-muted">Nomor Induk Kependudukan Siswa (NIK yang ada di kartu keluarga)
                </small>
            </div>
        </div>
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="nisn" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" id="" aria-describedby="tempat_lahir" value="<?= !empty($data_santri['tempat_lahir']) ? $data_santri['tempat_lahir'] : '' ?>" required>
            </div>
            <div class="col-md">
                <label for="" class="form-label">Tanggal Lahir</label>
                <input type="text" class="form-control datepicker" name="tanggal_lahir" id="tanggal_lahir" aria-describedby="tanggal_lahir" value="<?= !empty($data_santri['tanggal_lahir']) ? $data_santri['tanggal_lahir'] : '' ?>" required autocomplete="off">
            </div>
            <div class="col-md">
                <label for="" class="form-label">Jenis Kelamin</label>
                <div class="d-flex align-items-center bg-primary bg-opacity-10 py-1 px-2 rounded">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="janis_kelamin" id="laki" value="laki-laki">
                        <label class="form-check-label" for="inlineRadio1">Laki - laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="janis_kelamin" id="laki" value="perempuan">
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4"><span class="border-top d-block"></span></div>
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="" class="form-label">Hobi</label>
                <input type="text" class="form-control" name="hobi" id="">
            </div>
            <div class="col-md">
                <label for="" class="form-label">Cita-Cita </label>
                <input type="text" class="form-control" name="cita_cita" id="">
            </div>
        </div>
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="" class="form-label">Anak ke-</label>
                <input type="number" class="form-control" name="anak_ke" id="">
            </div>
            <div class="col-md">
                <label for="" class="form-label">Jumlah Saudara </label>
                <input type="number" class="form-control" name="jumlah_saudara" id="">
            </div>
        </div>
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="" class="form-label">Tinggi Badan </label>
                <input type="number" class="form-control" name="tinggi_badan" id="">
            </div>
            <div class="col-md">
                <label for="" class="form-label">Berat Badan </label>
                <input type="number" class="form-control" name="berat_badan" id="">
            </div>
        </div>
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="" class="form-label">Lingkar Kepala </label>
                <input type="number" class="form-control" name="lingkar_kepala" id="">
            </div>
            <div class="col-md">
                <label for="" class="form-label">Golongan Darah</label>
                <input type="text" class="form-control" name="golongan_darah" id="">
            </div>
        </div>
        <div class="py-4"><span class="border-top d-block"></span></div>
        <div class="row ">
            <div class="col-md mb-3">
                <label for="" class="form-label">Alamat Lengkap</label>
                <textarea class="form-control" name="alamat_lengkap" id="" rows="3"></textarea>
            </div>
        </div>
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="" class="form-label">Provinsi</label>
                <input type="text" class="form-control" name="provinsi" id="">
            </div>
            <div class="col-md">
                <label for="" class="form-label">Kabupaten/Kota</label>
                <input type="text" class="form-control" name="kabupaten_kota" id="">
            </div>
        </div>
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="" class="form-label">Kecamatan</label>
                <input type="text" class="form-control" name="kecamatan" id="">
            </div>
            <div class="col-md">
                <label for="" class="form-label">Desa/Kelurahan</label>
                <input type="text" class="form-control" name="desa_kelurahan" id="">
            </div>
            <div class="col-md">
                <label for="" class="form-label">Kode Pos</label>
                <input type="text" class="form-control" name="kode_pos" id="">
            </div>
        </div>
        <div class="py-4"><span class="border-top d-block"></span></div>
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="" class="form-label">No Hp Orang Tua</label>
                <input type="text" class="form-control" name="hp_orng_tua" id="">
                <small id="helpId" class="form-text text-muted">No HP orang tua yang dapat di hubungi</small>
            </div>
            <div class="col-md">
                <label for="" class="form-label">email</label>
                <input type="text" class="form-control" name="email" id="">
                <small id="helpId" class="form-text text-muted">Email aktif yang dapat di hubungi</small>
            </div>
        </div>
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="" class="form-label">Nama Sekolah Asal</label>
                <input type="text" class="form-control" name="sekolah_asal" id="">
                <small id="helpId" class="form-text text-muted">SD/MI/PKBM</small>
            </div>
            <div class="col-md">
                <label for="" class="form-label">No Telepon Sekolah Asal</label>
                <input type="text" class="form-control" name="no_telepon_sekolah_asal" id="">
                <small id="helpId" class="form-text text-muted">Nomer telepon sekolah asal yang bisa di hubungi</small>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md">
                <div class="mb-3">
                    <label for="" class="form-label">Alamat sekolah Asal</label>
                    <textarea class="form-control" name="alamat_sekolah_asal" id="" rows="3"></textarea>
                </div>
            </div>
        </div>
        <div class="py-4"><span class="border-top d-block"></span></div>
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="" class="form-label">NPSN</label>
                <input type="text" class="form-control" name=npsn id="">
                <small id="helpId" class="form-text text-muted"> ( Nomor Pokok Sekolah Nasional, contoh : 20279179 (8 Digit ) JIKA LULUS DARI SD ( WAJIB DIISI ) tanyakan ke pihak sekolah sebelumnya. Penting untuk data Emis </small>
            </div>
            <div class="col-md">
                <label for="" class="form-label">NSM</label>
                <input type="text" class="form-control" name="nsm" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">( Nomor statistik Madrasah ), contoh : 121332140001 (12 digit)JIKA LULUS DARI MI ( WAJIB DIISI ) tanyakan ke pihak sekolah sebelumnya. Penting untuk data Emis</small>
            </div>
        </div>
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="" class="form-label">Nomor Peserta Ujian SD/MI/PKBM</label>
                <input type="text" class="form-control" name="nomer_peserta_ujian" id="">
            </div>
            <div class="col-md">
                <label for="" class="form-label">Nomor SKHUN</label>
                <input type="text" class="form-control" name="nomor_skhun" id="">
            </div>
        </div>
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="" class="form-label">Total Nilai Ujian SD/MI/PKBM </label>
                <input type="text" class="form-control" name="total_nilai_ujian_sd" id="">
            </div>
            <div class="col-md">
                <label for="" class="form-label">Tanggal Lulus SD/MI/PKBM</label>
                <input type="text" class="form-control datepicker" name="tanggal_lulus" id="" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="">Lulusan Dari</label> <br>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="lulusan_dari" id="" value="SD"> SD
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="lulusan_dari" id="" value="MI"> MI
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="lulusan_dari" id="" value="PKBM/ Paket"> PKBM/ Paket
                    </label>
                </div>
            </div>

        </div>
        <div class="py-4"><span class="border-top d-block"></span></div>
         <!-- KK //-->
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="" class="form-label">Nomer KK</label>
                <input type="text" class="form-control" name="kk" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Nomer yang ada pada Lembaran KK (posisi dibawah judul Kartu keluarga )</small>
            </div>
        </div>
        <div class="py-4"><span class="border-top d-block"></span></div>
        <!-- ayah //-->
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="" class="form-label">Nama Ayah</label>
                <input type="text" class="form-control" name="nama_ayah" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Nama lengkap ayah</small>
            </div>
        </div>
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="" class="form-label">Tempat lahir Ayah</label>
                <input type="text" class="form-control" name="tempat_lahir_ayah" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-md">
                <label for="" class="form-label">Tanggal Lahir Ayah</label>
                <input type="text" class="form-control datepicker" name="tanggal_lahir_ayah" id="" aria-describedby="helpId" placeholder="">
            </div>

        </div>
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="" class="form-label">NIK Ayah</label>
                <input type="text" class="form-control" name="nik_ayah" id="" aria-describedby="helpId" placeholder="">
                <small class="text-muted">Nomor Induk Kependudukan Ayah (NIK)</small>
            </div>
            <div class="col-md">
                <label for="" class="form-label">Pendidikan Terakhir Ayah</label>
                <input type="text" class="form-control" name="pendidikan_terakhir_ayah" id="" aria-describedby="helpId" placeholder="">
            </div>

        </div>
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="" class="form-label">Penghasilan Ayah</label>
                <input type="number" class="form-control" name="penghasilan_ayah" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-md">
                <label for="" class="form-label">Pekerjaan Ayah</label>
                <input type="text" class="form-control" name="pekerjaan_ayah" id="" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="py-4"><span class="border-top d-block"></span></div>
        <!-- ibu //  -->
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control" name="nama_ibu" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Nama lengkap ibu</small>
            </div>
        </div>
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="" class="form-label">Tempat lahir Ibu</label>
                <input type="text" class="form-control" name="tempat_lahir_ibu" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-md">
                <label for="" class="form-label">Tanggal Lahir Ibu</label>
                <input type="text" class="form-control datepicker" name="tanggal_lahir_ibu" id="" aria-describedby="helpId" placeholder="">
            </div>

        </div>
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="" class="form-label">NIK Ibu</label>
                <input type="text" class="form-control" name="nik_ibu" id="" aria-describedby="helpId" placeholder="">
                <small class="text-muted">Nomor Induk Kependudukan ibu (NIK)</small>
            </div>
            <div class="col-md">
                <label for="" class="form-label">Pendidikan Terakhir Ibu</label>
                <input type="text" class="form-control" name="pendidikan_terakhir_ibu" id="" aria-describedby="helpId" placeholder="">
            </div>

        </div>
        <div class="row g-4 mb-3">
            <div class="col-md">
                <label for="" class="form-label">Penghasilan Ibu</label>
                <input type="number" class="form-control" name="penghasilan_ibu" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="col-md">
                <label for="" class="form-label">Pekerjaan Ibu</label>
                <input type="text" class="form-control" name="pekerjaan_ibu" id="" aria-describedby="helpId" placeholder="">
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>