<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <?= $this->include('layouts/partials/style') ?>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?= $this->include('layouts/partials/sidebar') ?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?= $this->include('layouts/partials/header') ?>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div id="content" style="min-height: 79vh;">
          <?= $this->renderSection('content') ?>
        </div>
      </div>
    </div>
  </div>
  <?= $this->include('layouts/partials/script') ?>

  <?= $this->renderSection('script') ?>
</body>

</html>