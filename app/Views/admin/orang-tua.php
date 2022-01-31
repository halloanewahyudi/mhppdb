<?= $this->extend('layouts/main') ?>
<?= $this->Section('content') ?>
<div id="daftarAyah">
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
      <table id="tableOrangTua" class="table display">
        <thead>
          <tr>
            <td class="no">No</th>
            <td class="ayah">Nama Ayah</td>
            <td class="ayah">warga Negara</td>
            <td class="ayah">Status </td>
            <td class="ayah">NIK </td>
            <td class="ayah">Tempat Lahir </td>
            <td class="ayah">Tgl Lahir </td>
            <td class="ayah">Pendidikan </td>
            <td class="ayah">Pekerjaan </td>
            <td class="ayah">Penghasilan </td>
            <td class="ayah">No Hp </td>
            <td class="ayah">Tempat Tinggal </td>
            <td class="ayah">Status Tempat Tinggal </td>
            <td class="ayah">Alamat Lengkap </td>
            <td class="ayah">Des/Kel </td>
            <td class="ayah">Kec </td>
            <td class="ayah">Kab/Kota </td>
            <td class="ayah">Prov </td>
            <td class="ayah">Kode Pos </td>
            <td class="ibu">Nama Ibu</td>
            <td class="ibu">warga Negara</td>
            <td class="ibu">Status </td>
            <td class="ibu">NIK </td>
            <td class="ibu">Tempat Lahir </td>
            <td class="ibu">Tgl Lahir </td>
            <td class="ibu">Pendidikan </td>
            <td class="ibu">Pekerjaan </td>
            <td class="ibu">Penghasilan </td>
            <td class="ibu">No Hp </td>
            <td class="ibu">Tempat Tinggal </td>
            <td class="ibu">Status Tempat Tinggal </td>
            <td class="ibu">Alamat Lengkap </td>
            <td class="ibu">Des/Kel </td>
            <td class="ibu">Kec </td>
            <td class="ibu">Kab/Kota </td>
            <td class="ibu">Prov </td>
            <td class="ibu">Kode Pos </td>
            <td class="d-none"></td>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($data_orang_tua as $key => $do) :
          ?>
            <tr id="row_<?= $do['id'] ?>">
              <td width="50"><?= $no ?></td>
              <td><?= $do['nama_ayah'] ?></td>
              <td><?= $do['warga_negara_ayah'] ?></td>
              <td><?= $do['status_ayah'] ?></td>
              <td><?= $do['nik_ayah'] ?></td>
              <td><?= $do['tempat_lahir_ayah'] ?></td>
              <td><?= $do['tgl_lahir_ayah'] ?></td>
              <td><?= $do['pendidikan_ayah'] ?></td>
              <td><?= $do['pekerjaan_ayah'] ?></td>
              <td><?= $do['penghasilan_ayah'] ?></td>
              <td><?= $do['no_hp_ayah'] ?></td>
              <td><?= $do['tempat_tinggal_ayah'] ?></td>
              <td><?= $do['status_tempat_tinggal_ayah'] ?></td>
              <td><?= $do['alamat_lengkap_ayah'] ?></td>
              <td><?= $do['desa_kelurahan_ayah'] ?></td>
              <td><?= $do['kecamatan_ayah'] ?></td>
              <td><?= $do['kabupaten_kota_ayah'] ?></td>
              <td><?= $do['provinsi_ayah'] ?></td>
              <td><?= $do['kode_pos_ayah'] ?></td>
              <td><?= $do['nama_ibu'] ?></td>
              <td><?= $do['warga_negara_ibu'] ?></td>
              <td><?= $do['status_ibu'] ?></td>
              <td><?= $do['nik_ibu'] ?></td>
              <td><?= $do['tempat_lahir_ibu'] ?></td>
              <td><?= $do['tgl_lahir_ibu'] ?></td>
              <td><?= $do['pendidikan_ibu'] ?></td>
              <td><?= $do['pekerjaan_ibu'] ?></td>
              <td><?= $do['penghasilan_ibu'] ?></td>
              <td><?= $do['no_hp_ibu'] ?></td>
              <td><?= $do['tempat_tinggal_ibu'] ?></td>
              <td><?= $do['status_tempat_tinggal_ibu'] ?></td>
              <td><?= $do['alamat_lengkap_ibu'] ?></td>
              <td><?= $do['desa_kelurahan_ibu'] ?></td>
              <td><?= $do['kecamatan_ibu'] ?></td>
              <td><?= $do['kabupaten_kota_ibu'] ?></td>
              <td><?= $do['provinsi_ibu'] ?></td>
              <td><?= $do['kode_pos_ibu'] ?></td>
              <td class="d-none"><?= date('d F Y', strtotime($do['created_at'])); ?></td>
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
         var date = new Date( data[37] );
  
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
         var t = $('#tableOrangTua').DataTable({
             dom: 'Bfrtip',
             buttons: [{
                     extend: 'excel',
                     text: 'Download',
                     exportOptions: {
                     columns:  [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23 ,24, 35, 26, 27, 28, 29, 30, 31, 32 ,33 ,34, 35, 36]
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

<?= $this->endSection(); ?>