<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/admin') ?>">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/daftar-user') ?>">
          <span data-feather="users"></span>
          Daftar User
        </a>
      </li>
 <?php if( in_groups(1,true) || in_groups(4,true)): ?>
 <?php if(in_groups(1,true)){
     $collapse = 'collapse';
  } else{
    $collapse ='';
  }  ?>
      <li class="nav-item">
         <a class="nav-link" data-bs-toggle="<?= $collapse ?>"  href="#profileItem" >
          <span data-feather="user"></span>
          Santri
        </a>
         <div class="<?= $collapse ?> bg-light border-right border" id="profileItem">
        <a class="nav-link" href="<?= base_url('sudah-daftar/') ?>">
         
          Santri keseluruhan
        </a>
      <!--   <a class="nav-link" href="<?= base_url('santri-ra') ?>">
          Jenjang RA
        </a>
         <a class="nav-link" href="<?= base_url('santri-mi') ?>">
          Jenjang MI
        </a> -->
        <a class="nav-link" href="<?= base_url('santri-mts-putra') ?>">
          Jenjang MTs Putra
        </a>
         <a class="nav-link" href="<?= base_url('santri-mts-putri') ?>">
          Jenjang MTs Putri
        </a>
        <a class="nav-link" href="<?= base_url('santri-ma-putra') ?>">
          Jenjang MA Putra
        </a>
        <a class="nav-link" href="<?= base_url('santri-ma-putri') ?>">
          Jenjang MA Putri
        </a>
         </div>
      </li>
    <?php endif; ?>
  <?php if( in_groups(3,true) || in_groups(1,true)  ): ?>
  <?php if(in_groups(1,true)){
     $collapse = 'collapse';
  } else{
    $collapse ='';
  }  ?>
      <li class="nav-item">
       <a class="nav-link"  data-bs-toggle="<?= $collapse ?>" href="#pembayaranItem" >
         <span data-feather="credit-card"></span> Pembayaran
       </a>
        <div class=" <?= $collapse ?> bg-light border-right border" id="pembayaranItem">
        <a class="nav-link" href="<?= base_url('sudah-bayar/') ?>">
          Seluruh Pembayaran
        </a>
        <!--  <a class="nav-link" href="<?//= base_url('ra-bayar/') ?>">
          Jenjang RA
        </a>
        <a class="nav-link" href="<?//= base_url('mi-bayar/') ?>">
          Jenjang MI
        </a> -->
        <a class="nav-link" href="<?= base_url('mts-putra-bayar/') ?>">
          Jenjang MTs Putra
        </a>
        <a class="nav-link" href="<?= base_url('mts-putri-bayar/') ?>">  
          Jenjang MTs Putri
        </a>
        <a class="nav-link" href="<?= base_url('ma-putra-bayar/') ?>">
          Jenjang MA Putra
        </a>
         <a class="nav-link" href="<?= base_url('ma-putri-bayar/') ?>">
          Jenjang MA Putri
        </a>
      </div>
      </li>
    <?php endif; ?>
    <?php if( in_groups(1,true)): ?>
       <li class="nav-item">
        <a class="nav-link" href="<?= base_url('list-berkas') ?>">
          <span data-feather="layers"></span>
         Berkas Santri
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('undangan-edit/1') ?>">
          <span data-feather="edit-2"></span>
           Edit Undangan
        </a>
      </li>
    <?php endif;?>
    </ul>
  </div>
</nav>