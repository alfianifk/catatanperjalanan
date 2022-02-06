<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?= base_url(''); ?>/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"> <?= $this->session->userdata('nama'); ?> </div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <?php if ($this->session->userdata('nama') == 'Admin') : ?>
                <a href="<?= base_url('dashboard/users');  ?> " class="dropdown-item has-icon">
                <i class="far fa-user"></i> Data Pengguna
              </a>
            <?php else : ?>
              <a href="<?= base_url('dashboard/profile');  ?> " class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
            <?php endif; ?>
              <div class="dropdown-divider"></div>
              <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Catatan Perjalanan</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <?php if ($this->session->userdata('nama') == 'Admin') : ?>
                <li><a class="nav-link" href=" <?= base_url('dashboard/users') ?> "><i class="fas fa-users"></i> <span>Data Pengguna </span></a></li>
                <li><a class="nav-link" href=" <?= base_url('dashboard/admin') ?> "><i class="fas fa-paper-plane"></i> <span>Data Catatan Perjalanan </span></a></li>

              <?php else: ?>
                <li><a class="nav-link" href=" <?= base_url('dashboard') ?> "><i class="fas fa-fire"></i> <span> Dashboard </span></a></li>
                <li><a class="nav-link" href=" <?= base_url('dashboard/profile') ?> "><i class="fas fa-user"></i> <span>Profile </span></a></li>
              <?php endif; ?>
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href=" <?= base_url('auth/logout'); ?> " class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-out-alt"></i> Keluar
              </a>
            </div>
        </aside>
      </div>