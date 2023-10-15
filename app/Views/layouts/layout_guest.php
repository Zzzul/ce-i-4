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
  <?= $this->renderSection('content') ?>
  <?= $this->include('layouts/partials/script') ?>
</body>

</html>