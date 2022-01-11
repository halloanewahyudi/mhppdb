<div class="col-lg-8 mx-auto">
    <form action="" method="post">
        <div class="mb-3">
          <label for="" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama" aria-describedby="helpId" placeholder="" value="<?= !empty($data_santri['nama']) ? $data_santri['nama'] : '' ?>" >
          <small id="helpId" class="form-text text-muted">Nama Lengkap Siswa (Sesuai Ijazah)</small>
        </div>
        <div class="row g-2">
            <div class="col-md">
            <div class="mb-3">
              <label for="nisn" class="form-label">NISN (Nomor Induk Siswa Nasional)</label>
              <input type="text" class="form-control" name="nisn" id="" aria-describedby="nisn" placeholder="">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            </div>
           <div class="col-md">
           
           </div>
        </div>
    </form>
</div>