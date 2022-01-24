<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="<?= base_url('assets/img/mhlogo.jpg');?>" type="image/png">
    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <script src="<?= base_url(); ?>/assets/js/jquery-3.6.0.min.js"></script>

<body class="bg-light">
<?php // = $this->include('layouts/header'); ?>
<div class="container-fluid">
  <div class="row">
   <!-- Sidebar --> 
   <?php  // = $this->include('layouts/sidebar'); ?>
   <!-- end sidebar -->
    <main id="app" >
       <!--  page title -->
      <div class="container">
      <?= $this->renderSection('content'); ?>
      </div>
    </main>
    <?= $this->include('layouts/footer'); ?>
  </div>
</div>

    <script src="<?= base_url(); ?>/assets/js/axios.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/bootstrap.bundle.min.js"></script>
 
    <script src="<?= base_url(); ?>/assets/js/bouncer.polyfills.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/feather.min.js"></script>
<script src="<?= base_url(); ?>/assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>
  feather.replace()
 
  var bouncer = new Bouncer('[data-validate]')

  // datepicker
  jQuery('.datepicker').datepicker({
    format: 'dd/mm/yyyy',
    startDate: '-3d'
});
</script>
</body>
</html>