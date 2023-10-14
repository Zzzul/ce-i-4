<?= script_tag('assets/libs/jquery/dist/jquery.min.js') ?>
<?= script_tag('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') ?>
<?= script_tag('https://cdn.jsdelivr.net/npm/sweetalert2@11') ?>

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