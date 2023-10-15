<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
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
        <div id="content">
          <?= $this->renderSection('content') ?>
        </div>
        <?= $this->include('layouts/partials/footer') ?>
      </div>
    </div>
  </div>
  <?= $this->include('layouts/partials/script') ?>
</body>

</html>