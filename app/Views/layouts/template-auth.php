<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/css/dashboard.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet">

    <script src="<?= base_url(); ?>/assets/js/vue.js"></script>
    <script src="<?= base_url(); ?>/assets/js/vuejs-datepicker.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/vue-datepicker-id.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/axios.min.js"></script>

</head>
<body id="app" class="bg-light">
<div class="container-fluid">
  <div class="row">
    <main id="app" class="col-lg-6 p-3 mx-auto d-flex flex-column vh-100 justify-content-center">
        <!--ini content--> 
        <?= $this->renderSection('content'); ?>
       <!--  end content -->
      
    </main>

  </div>
</div>

<script src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/feather.min.js"></script>
<script>

  feather.replace();
  var state = {
  date: new Date(2010, 9,  16)
}

const app = new Vue({
  el:'#dp',
  data() {
    return {
      id: vdp_translation_id.js
    }
  },
  components: {
  	vuejsDatepicker
  }
})
  
</script>
</body>
</html>