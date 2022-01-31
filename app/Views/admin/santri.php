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
    <table id="datatablesSimple" class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th >Nama</th>
          <th >NISN</th>
          <th >NIS</th>
          <th >NIK</th>
          <th >Tmp Lahir</th>
          <th >Tgl Lahir</th>
          <th >Gender</th>
          <th >Anak Ke</th>
          <th >Jmlh Saudara</th>
          <th >Agama</th>
          <th >Cita2</th>
          <th >Hobi</th>
          <th >No HP</th>
          <th >Email</th>
          <th >Alamat</th>
          <th >Kel / Desa</th>
          <th >Kec</th>
          <th >Kota / Kab</th>
          <th >Provinsi</th>
          <th >Kode Pos</th>
          <th >Transp</th>
          <th >Jarak ke Madrasah</th>
          <th >Pembiaya Sekolah</th>
          <th >Keb Khusus</th>
          <th >Keb Disabilitas</th>
          <th >Pra Sekolah</th>
          <th >Imunisasi</th>
          <th >KIP</th>
          <th >KK</th>
          <th >Kep Keluarga</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($data_santri as $key => $ds) :
        ?>
          <tr id="row_<?= $ds->id ?>">
            <td width="50"><?= $no ?></td>
            <td><?= $ds->nama ?></td>
            <td><?= $ds->nisn; ?></td>
            <td><?= $ds->nis; ?></td>
            <td ><?= $ds->nik; ?></td>
            <td><?= $ds->tempat_lahir; ?></td>
            <td><?= $ds->tanggal_lahir; ?></td>
            <td><?= $ds->jenis_kelamin; ?></td>
            <td><?= $ds->anak_ke; ?></td>
            <td><?= $ds->jumlah_sudara; ?></td>
            <td><?= $ds->agama; ?></td>
            <td><?= $ds->cita_cita; ?></td>
            <td><?= $ds->hobi; ?></td>
            <td><?= $ds->no_hp; ?></td>
            <td><?= $ds->email; ?></td>
            <td><?= $ds->alamat_lengkap; ?></td>
            <td><?= $ds->desa_kelurahan; ?></td>
            <td><?= $ds->kecamatan; ?></td>
            <td><?= $ds->kabupaten_kota; ?></td>
            <td><?= $ds->provinsi; ?></td>
            <td><?= $ds->kode_pos; ?></td>
            <td><?= $ds->jenis_transportasi; ?></td>
            <td><?= $ds->jarak_tempat_tinggal; ?></td>
            <td><?= $ds->yang_membiayai_sekolah; ?></td>
            <td><?= $ds->kebutuhan_khusus; ?></td>
            <td><?= $ds->kebutuhan_disabilitas; ?></td>
            <td><?= $ds->pra_sekolah; ?></td>
            <td><?= $ds->imunisasi; ?></td>
            <td><?= $ds->nomer_kip; ?></td>
            <td><?= $ds->nomer_kk; ?></td>
            <td><?= $ds->nama_kepala_keluarga; ?></td>
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
    function(settings, data, dataIndex) {
      var min = minDate.val();
      var max = maxDate.val();
      var date = new Date(data[7]);

      if (
        (min === null && max === null) ||
        (min === null && date <= max) ||
        (min <= date && max === null) ||
        (min <= date && date <= max)
      ) {
        return true;
      }
      return false;
    }
  );

  //===============
  // jquery
  $(document).ready(function() {
    // Create date inputs
    // untuk range vilter
    // Create date inputs
    minDate = new DateTime($('#min'), {
      format: 'MMMM Do YYYY'
    });
    maxDate = new DateTime($('#max'), {
      format: 'MMMM Do YYYY'
    });
    // data table
    var t = $('#datatablesSimple').DataTable({
      dom: 'Bfrtip',
      buttons: [{
          extend: 'excel',
          text: 'Download',
          exportOptions: {
            columns: [1, 2, 3, 4, 5, 6, 7, 8]
          }
        },
        'pdf'
      ],

    });
    // end===
  
    // get var t for date input
    $('#min, #max').on('change', function() {
      t.draw();
    });

    //==
    t.on('draw', function() {
      $('.delete').on('click', function(e) {
        e.preventDefault();
        var getid = $(this).data('delete');
        Swal.fire({
          title: 'Apakah ingin di hapus?',
          showCancelButton: true,
          confirmButtonText: 'Delete',
        }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {
            axios.get('<?= base_url('delete-user') ?>/' + getid, {
                status: 1,
                headers: {
                  'Access-Control-Allow-Origin': '*',
                  'Access-Control-Allow-Methods': 'PUT'
                },
              }).then((res) => {
                console.log(res)
              })
              .catch((err) => {
                console.log(err)
              })
            location.reload();
          }
        })
      });
    })


  });
  //=====
</script>

</style>
<?= $this->endSection(); ?>