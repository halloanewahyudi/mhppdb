<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Custom styles for this template-->
  <link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/scss/ane.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link href="<?= base_url(); ?>/assets/fontawesome/css/all.min.css" rel="stylesheet">
  <script src="<?= base_url(); ?>/assets/js/jquery-3.6.0.min.js"></script>

</head>

<body class="bg-light">
  <?= $this->include('layouts/header'); ?>
  <div class="container">
    <!--ini content-->
    <?= $this->renderSection('content'); ?>
    <!--  end content -->
    <?= $this->include('layouts/footer'); ?>
  </div>
  </div>

  <script src="<?= base_url(); ?>/assets/js/axios.min.js"></script>
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
    jQuery('.datepicker').datepicker({
      format: 'dd/mm/yyyy',
      startDate: '-3d'
    });
  </script>
  </script>
</body>

</html>