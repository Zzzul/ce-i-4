<?= $this->extend('layouts/layout_authenticated_isolated'); ?>

<?= $this->section('style'); ?>
  <?= link_tag('assets/libs/quilljs/quill.snow.css') ?>
  <?= link_tag('assets/libs/select2/select2.min.css') ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

  <style>
    #editor {
      min-height: 75vh;
      height: 75vh;
      max-height: 75vh;
      background: #ededed;
      padding: 1rem 0 0 0;
    }

    @media screen and (max-width: 768px) {
      #editor {
        min-height: 69vh;
        height: 69vh;
        max-height: 69vh;
      }
    }

    .select2.select2-container.select2-container--default {
      width: 100% !important;
    }

    .accordion-button:not(.collapsed) {
      background-color: #fff0 !important;
    }
  </style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
  <?= $this->setData([
    'action' => url_to('Admin\PostController::create'),
    'do' => 'create',
    'data' => isset($data) ? $data : null,
  ])->render('admin/post/include/form') ?>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
  <?= script_tag('assets/libs/quilljs/quill.js') ?>
  <?= script_tag('assets/libs/select2/select2.min.js') ?>

  <script>
    
    $(document).ready(function() {
      var quill = new Quill('#editor', {
        theme: 'snow'
      });
      
      quill.on('text-change', function(delta, oldDelta, source) {
        // console.log(quill.container.firstChild.innerHTML)
        $('textarea#content').val(quill.container.firstChild.innerHTML);
      });

      $('#label').select2({
        tags: true,
        tokenSeparators: [',', ' '],
        theme: 'bootstrap-5',
        selectionCssClass: "select2--small",
        dropdownCssClass: "select2--small"
      });
    })
  </script>
<?= $this->endSection(); ?>