<?= script_tag('assets/libs/jquery/dist/jquery.min.js') ?>
<?= script_tag('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') ?>
<?= script_tag('https://cdn.jsdelivr.net/npm/sweetalert2@11') ?>

<?= script_tag('assets/js/sidebarmenu.js') ?>
<?= script_tag('assets/js/app.min.js') ?>
<?= script_tag('assets/libs/apexcharts/dist/apexcharts.min.js') ?>
<?= script_tag('assets/libs/simplebar/dist/simplebar.js') ?>
<?= script_tag('https://cdn.datatables.net/v/bs5/dt-1.13.6/r-2.5.0/datatables.min.js') ?>
<script>

  const Toast = Swal.mixin({
    toast: true,
    position: 'top',
    showConfirmButton: false,
    timer: 3000
  })

  <?php if (session()->getFlashdata('success')) : ?>
    Toast.fire({
      icon: 'success',
      title: '<?= session()->getFlashdata('success') ?>'
    })
  <?php endif; ?>

  <?php if (session()->getFlashdata('error')) : ?>
    Toast.fire({
      icon: 'error',
      title: '<?= session()->getFlashdata('error') ?>'
    })
  <?php endif; ?>
</script>