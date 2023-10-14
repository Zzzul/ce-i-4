<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="./index.html" class="text-nowrap logo-img">
        <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <hr class="mb-0 mt-4">
      <button type="button" class="btn btn-outline-primary btn-block w-100 py-2 mb-4 d-none d-md-block"><i class="ti ti-plus me-2"></i> Tambah Postingan</button>
      <ul id="sidebarnav">
        <!-- <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">UI COMPONENTS</span>
        </li> -->
        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= url_to('Admin\PostController::index') ?>" aria-expanded="false">
            <span>
              <i class="ti ti-article"></i>
            </span>
            <span class="hide-menu">Postingan</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= url_to('Admin\StatsController::index') ?>" aria-expanded="false">
            <span>
              <i class="ti ti-chart-area"></i>
            </span>
            <span class="hide-menu">Statistik</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= url_to('Admin\CommentController::index') ?>" aria-expanded="false">
            <span>
              <i class="ti ti-message"></i>
            </span>
            <span class="hide-menu">Komentar</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= url_to('Admin\SettingController::index') ?>" aria-expanded="false">
            <span>
              <i class="ti ti-settings"></i>
            </span>
            <span class="hide-menu">Pengaturan</span>
          </a>
        </li>

      </ul>
      <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
        <div class="d-flex">
          <div class="unlimited-access-title me-3">
            <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade ke Pro</h6>
            <a href="#" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Beli</a>
          </div>
          <div class="unlimited-access-img">
            <img src="../assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>