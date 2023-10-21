<header class="app-header">
  <nav class="navbar navbar-expand-lg navbar-light">
    <ul class="navbar-nav w-100">
      <li class="nav-item d-flex align-items-center gap-2">
        <a href="#" class="fw-bold" style="font-size: 18px;"><i class="ti ti-chevron-left" style="line-height: 3;"></i></a><?= $title ?>
      </li>
    </ul>
    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
      <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
        <!-- <a href="#" target="_blank" class="btn btn-primary">Download Free</a> -->
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
            aria-expanded="false">
            <img src="<?= base_url('assets/images/profile/user-1.jpg') ?>" alt="" width="35" height="35" class="rounded-circle">
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
            <div class="message-body mx-3">
              <a href="<?= url_to('Admin\ProfileController::index') ?>" class="d-flex align-items-center gap-2 dropdown-item">
                <i class="ti ti-user fs-6"></i>
                <p class="mb-0 fs-3">My Profile</p>
              </a>
              <a href="<?= url_to('Admin\TaskController::index') ?>" class="d-flex align-items-center gap-2 dropdown-item">
                <i class="ti ti-list-check fs-6"></i>
                <p class="mb-0 fs-3">My Task</p>
              </a>
              <?= form_open('auth/delete/session') ?>
                <button type="submit" class="btn w-100 btn-outline-primary mt-2 d-block">Logout</button>
              <?= form_close() ?>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</header>