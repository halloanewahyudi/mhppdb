<?= $this->extend('layouts/main') ?>
<?= $this->Section('content') ?>
<div id="daftarSekolahAsal">
    <table id="" border="0" cellspacing="5" cellpadding="5">
        <tbody>
            <tr>
                <td>Dari tanggal:</td>
                <td><input type="text" class="form-control " id="min" name="min"></td>
            </tr>
            <tr>
                <td>Ke tanggal:</td>
                <td><input type="text" class="form-control " id="max" name="max"></td>
            </tr>
        </tbody>
    </table>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            <?= $judul; ?>
        </div>
        <div class="card-body table-responsive">
            <table id="tableSekolahAsal" class="table  display">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Lulus Dari</td>
                        <td>nama Sekolah</td>
                        <td>alamat Sekolah</td>
                        <td>no Kontak Sekolah</td>
                        <td>npsn</td>
                        <td>nsm</td>
                        <td>no Peserta Un</td>
                        <td>no Skhun</td>
                        <td>no Seri Ijazah</td>
                        <td>total Nilai Un</td>
                        <td>tangal Lulus Sekolah</td>
                        <td class="d-none"></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_sakolah_asal as $key => $ds) :
                    ?>
                        <tr id="row_<?= $ds['id'] ?>">
                            <td width="50"><?= $no ?></td>
                            <td><?= $ds['nama'] ?></td>
                            <td><?= $ds['lulus_dari'] ?></td>
                            <td><?= $ds['nama_sekolah'] ?></td>
                            <td><?= $ds['alamat_sekolah'] ?></td>
                            <td><?= $ds['no_kontak_sekolah'] ?></td>
                            <td><?= $ds['npsn'] ?></td>
                            <td><?= $ds['nsm'] ?></td>
                            <td><?= $ds['no_peserta_un'] ?></td>
                            <td><?= $ds['no_skhun'] ?></td>
                            <td><?= $ds['no_seri_ijazah'] ?></td>
                            <td><?= $ds['total_nilai_un'] ?></td>
                            <td><?= $ds['tangal_lulus_sekolah'] ?></td>
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
        var date = new Date( data[13] );
 
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
        var t = $('#tableSekolahAsal').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'excel',
                    text: 'Download',
                    exportOptions: {
                    columns: [ 1, 2,3,4,5,6,7,8,9,10,11,12]
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