<?= $this->extend('layouts/layout_authenticated'); ?>
<?= $this->section('content'); ?>

<style>
  #table td {
    padding: 0;
  }

  #table .post-item {
    border: 1px solid #e5e5e5;
    border-radius: 6px;
    margin-bottom: 16px;
    padding: 10px 6px;
  }

  #table .post-item .post-overview {
    flex: 1;
    min-width: 0;
    padding-left: 16px;
    width: calc(100% - 72px);
  }

  #table .post-item .post-overview .top-detail .post-title {
    align-self: center;
    overflow: hidden;
    text-align: left;
    text-overflow: ellipsis;
    white-space: nowrap;
  }

  #table .post-item .post-overview .top-detail .post-author {
    display: flex;
    flex: 0 0 auto;
    flex-direction: row;
    margin: 0 0 0 auto;
    z-index: 2;
    align-items: center;
    gap: 8px;
  }

  /* #table .post-item .post-overview .bottom-detail .post-status-date {
    align-self: center;
    flex: 0 0 auto;
    z-index: 2;
  } */
</style>

<div class="row">
  <div class="col-md-10 mx-auto">
    <table id="table" class="table table-borderless" style="width:100%;">
      <thead style="display: none;">
        <tr>
          <th>Articles</th>
        </tr>
      </thead>
    </table>
  </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
  $('#table').DataTable({
    processing: true,
    serverSide: true,
    ajax: '<?= url_to('Admin\PostController::index') ?>',
    columns: [{
      data: 9,
      name: 'article_view'
    }]
  });
</script>
<?= $this->endSection(); ?>