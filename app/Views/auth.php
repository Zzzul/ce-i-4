<?php $this->extend('layouts/layout_guest'); ?>

<?php $this->section('content'); ?>

<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <?= img('assets/images/logos/dark-logo.svg', false, ['width' => '180', 'alt' => '']) ?>
                </a>
                <p class="text-center">Your Social Campaigns</p>
                
                <?= $this->setVar('error', session()->getFlashdata('error'))->render('components/alert') ?>

                <?= form_open('auth/create', ['x-data' => '{ submit: false }', '@submit' => 'submit = true']) ?>
                  <div class="mb-3">
                    <label for="usernameInput" class="form-label">Username</label>
                    <input type="text" class="form-control" id="usernameInput" aria-describedby="textHelp" name="username">
                  </div>
                  <div class="mb-4">
                    <label for="passwordInput" class="form-label">Password</label>
                    <input type="password" class="form-control" id="passwordInput" name="password">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" name="remember" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" x-bind:disabled="submit" x-text="submit ? 'Please wait...' : 'Sign In'">Sign In</button>
                <?= form_close() ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?= $this->endSection(); ?>