<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="icon" href="<?= base_url('assets/img/mhlogo.jpg'); ?>" type="image/png">
  <!-- Custom styles for this template-->
  <link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/css/styles.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/scss/ane.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/fontawesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <script src="<?= base_url(); ?>/assets/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/dataTables.bootstrap5.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/buttons.html5.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/jszip.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/moment.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/dataTables.dateTime.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/axios.min.js"></script>


<body class="sb-nav-fixed bg-light">
  <?= $this->include('layouts/header'); ?>
  <div id="layoutSidenav">
   <!--  SIdebar -->
   <?php
   if(user()->level == null){
      echo $this->include('layouts/sidebar-admin');
   } else{
    echo $this->include('layouts/sidebar');
   }?>

    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <?= $this->renderSection('content'); ?>
        </div>
      </main>
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <?= $this->include('layouts/footer'); ?>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="<?= base_url(); ?>/assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/bouncer.polyfills.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/sweetalert2.all.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/feather.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/scripts.js"></script>
  <script src="<?= base_url(); ?>/assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script>
    feather.replace()
    var bouncer = new Bouncer('[data-validate]')

    // datepicker
    $('.datepicker').datepicker({
      format: 'dd/mm/yyyy',
      startDate: '-3d'
    });
  </script>
</body>

</html>