<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free Isolated</title>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <?= $this->include('layouts/partials/style') ?>
  <?= $this->renderSection('style') ?>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-navbarbg="skin6">
    <!-- Sidebar Start -->
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?= $this->include('layouts/partials/header_isolated') ?>
      <!--  Header End -->
      <div id="content w-100" style="padding: 0 25px;">
        <?= $this->renderSection('content') ?>
      </div>
    </div>
  </div>
  <?= $this->include('layouts/partials/script') ?>
  <?= $this->renderSection('script') ?>
</body>

</html>