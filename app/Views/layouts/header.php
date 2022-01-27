<nav class="sb-topnav navbar navbar-expand navbar-light bg-white">
  <!-- Navbar Brand-->
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"> <img src="<?= base_url('assets/img/mhlogo.jpg'); ?>" alt="" srcset="" width="40"> MINHAJUL HAQ</a>

  <!-- Navbar-->
  <ul class="navbar-nav ms-auto me-3 me-lg-4">
    <?php if (logged_in()) : 
       $db = \Config\Database::connect();
     $query = $db->query('SELECT nama FROM santri WHERE user_id ='. user_id());
     $results = $query->getRow();
    if(isset($results)){
      $nama = $results->nama;
    }else{
      $nama = user()->username;
    }
       
      ?>
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">  <?= $nama  ?> <i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#!">Settings</a></li>
          <li><a class="dropdown-item" href="#!">Activity Log</a></li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><a class="dropdown-item" href="<?= base_url('logout') ?>">Logout</a></li>
        </ul>
      </li>
    <?php else : ?>
      <li class="nav-item">
        <a href="<?= base_url('login') ?>" class="btn btn-sm btn-primary">Login <i class="fas fa-sign-in-alt"></i></a>
      </li>
    <?php endif; ?>
  </ul>
</nav>