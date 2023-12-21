<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <div class="profile" style="text-align: center;">
        <div class="user-panel">
          <img style="max-width: 98px;" class=" align-items-center justify-content-center mt-3" src="<?= base_url('assets/img/icon/Lambang_Kabupaten_Kubu_Raya.png'); ?>">
        </div>

        <div style="color: white; font-size: 100%; font-family:arial;" class=" d-flex align-items-center justify-content-center mt-2 mb-2">
          <span><b>WEB KUALA DUA KABUPATEN KUBU RAYA</b></span>
        </div>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <?php
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT `user_menu` . `id`, `menu`
                    FROM `user_menu` JOIN `user_access_menu`
                    ON `user_menu` . `id` = `user_access_menu` . `menu_id`
                    WHERE `user_access_menu` . `role_id` = $role_id
                    ORDER BY `user_access_menu` . `menu_id` ASC ";

        $menu = $this->db->query($queryMenu)->result_array();
        ?>

        <!--Looping Menu -->
        <?php foreach ($menu as $m) : ?>
          <div class="sidebar-heading">
            <?= $m['menu']; ?>
          </div>

          <!-- Looping SubMenu -->
          <?php
          $menuId = $m['id'];
          $querySubMenu = "SELECT *
                    FROM `user_sub_menu` JOIN `user_menu`
                    ON `user_sub_menu` . `menu_id` = `user_menu` . `id`
                    WHERE `user_sub_menu` . `menu_id` = $menuId
                    AND `user_sub_menu` . `is_active` = 1 ";

          $subMenu = $this->db->query($querySubMenu)->result_array();
          ?>

          <!-- Nav Item - Dashboard -->
          <?php foreach ($subMenu as $sm) : ?>
            <?php if ($title == $sm['judul']) : ?>
              <li class="nav-item active">
              <?php else : ?>
              <li class="nav-item">
              <?php endif; ?>
              <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                <i class="<?= $sm['icon']; ?>"></i>
                <span><?= $sm['judul']; ?></span></a>
              </li>
            <?php endforeach; ?>

            <!-- Divider -->
            <hr class="sidebar-divider">

          <?php endforeach; ?>

          <li class="nav-item">
            <a class="nav-link tombol-keluar" href="<?= base_url('auth/logout'); ?>">
              <i class="fas fa-fw fa-sign-out-alt"></i>
              <span>Keluar</span>
            </a>
          </li>

          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">