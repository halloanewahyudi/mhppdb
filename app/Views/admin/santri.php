<?= $this->extend('layouts/main') ?>
<?= $this->Section('content') ?>
<div id="daftarUser">
  <table border="0" cellspacing="5" cellpadding="5">
    <tbody>
      <tr>
        <td>Dari tanggal:</td>
        <td><input type="text" class="form-control" id="min" name="min"></td>
      </tr>
      <tr>
        <td>Ke tanggal:</td>
        <td><input type="text" class="form-control" id="max" name="max"></td>
      </tr>
    </tbody>
  </table>
  <div class="card mb-4">
    <div class="card-header">
      <i class="fas fa-table me-1"></i>
      <?= $judul; ?>
    </div>
    <div class="card-body table-responsive">
    <table id="tableSantri" class="table display">
      <thead>
        <tr>
        <td>No</td>
          <td >Nama</td>
          <td >NISN</td>
          <td >NIS</td>
          <td >NIK</td>
          <td >Tmp Lahir</td>
          <td >Tgl Lahir</td>
          <td >Gender</td>
          <td >Anak Ke</td>
          <td >Jmlh Saudara</td>
          <td >Agama</td>
          <td >Cita2</td>
          <td >Hobi</td>
          <td >No HP</td>
          <td >Email</td>
          <td >Alamat</td>
          <td >Kel / Desa</td>
          <td >Kec</td>
          <td >Kota / Kab</td>
          <td >Provinsi</td>
          <td >Kode Pos</td>
          <td >Transp</td>
          <td >Jarak ke Madrasah</td>
          <td >Pembiaya Sekolah</td>
          <td >Keb Khusus</td>
          <td >Keb Disabilitas</td>
          <td >Pra Sekolah</td>
          <td >Imunisasi</td>
          <td >KIP</td>
          <td >KK</td>
          <td >Kep Keluarga</td>
          <td class="d-none"></td>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($data_santri as $key => $ds) :
        ?>
          <tr id="row_<?= $ds['id'] ?>">
            <td width="50"><?= $no ?></td>
            <td><?= $ds['nama'] ?></td>
            <td><?= $ds['nisn'] ?></td>
            <td><?= $ds['nis'] ?></td>
            <td ><?= $ds['nik'] ?></td>
            <td><?= $ds['tempat_lahir'] ?></td>
            <td><?= $ds['tanggal_lahir'] ?></td>
            <td><?= $ds['jenis_kelamin'] ?></td>
            <td><?= $ds['anak_ke'] ?></td>
            <td><?= $ds['jumlah_saudara'] ?></td>
            <td><?= $ds['agama'] ?></td>
            <td><?= $ds['cita_cita'] ?></td>
            <td><?= $ds['hobi'] ?></td>
            <td><?= $ds['no_hp'] ?></td>
            <td><?= $ds['email'] ?></td>
            <td><?= $ds['alamat_lengkap'] ?></td>
            <td><?= $ds['desa_kelurahan'] ?></td>
            <td><?= $ds['kecamatan'] ?></td>
            <td><?= $ds['kabupaten_kota'] ?></td>
            <td><?= $ds['provinsi'] ?></td>
            <td><?= $ds['kode_pos'] ?></td>
            <td><?= $ds['jenis_transportasi'] ?></td>
            <td><?= $ds['jarak_tempat_tinggal'] ?></td>
            <td><?= $ds['yang_membiayai_sekolah'] ?></td>
            <td><?= $ds['kebutuhan_khusus'] ?></td>
            <td><?= $ds['kebutuhan_disabilitas'] ?></td>
            <td><?= $ds['pra_sekolah'] ?></td>
            <td><?= $ds['imunisasi'] ?></td>
            <td><?= $ds['nomer_kip'] ?></td>
            <td><?= $ds['nomer_kk'] ?></td>
            <td><?= $ds['nama_kepala_keluarga'] ?></td>
            <td class="d-none"><?=  date('d F Y', strtotime($ds['created_at'] )); ?></td>
          </tr>
        <?php
          $no++;
        endforeach; ?>
      </tbody>
    </table>
  </div> <!-- end table responsive -->
  </div>
</div>
<script>
 // range filter
 var minDate, maxDate;
 
 // Custom filtering function which will search data in column four between two values
 $.fn.dataTable.ext.search.push(
     function( settings, data, dataIndex ) {
         var min = minDate.val();
         var max = maxDate.val();
         var date = new Date( data[31] );
  
         if (
             ( min === null && max === null ) ||
             ( min === null && date <= max ) ||
             ( min <= date   && max === null ) ||
             ( min <= date   && date <= max )
         ) {
             return true;
         }
         return false;
     }
 );
 
     //===============
       // jquery
     $(document).ready(function() {
 
         minDate = new DateTime($('#min'), {
                 format: 'DD MMMM YYYY'
             });
             maxDate = new DateTime($('#max'), {
                 format: 'DD MMMM YYYY'
             });
 
         // data table
         var t = $('#tableSantri').DataTable({
             dom: 'Bfrtip',
             buttons: [{
                     extend: 'excel',
                     text: 'Download',
                     exportOptions: {
                     columns:  [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23 ,24, 35, 26, 27, 28, 29, 30]
                      }
                 },
                 'pdf'
             ],
          
         });
     
     // Refilter the table
     $('#min, #max').on('change', function () {
         t.draw();
     });
        
     });
  //=====
</script>

</style>
<?= $this->endSection(); ?>