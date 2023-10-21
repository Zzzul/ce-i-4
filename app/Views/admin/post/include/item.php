<div class="w-100 d-flex flex-row align-items-center post-item">
  <img src="https://picsum.photos/350/300" alt="" class="rounded-1 me-2" width="60" height="50">
  <div class="d-flex flex-column post-overview">
    <div class="d-flex flex-row top-detail" style="flex:0 0 auto; height: 32px">
      <div class="post-title">
        <a href="<?= url_to('Admin\PostController::edit', $data->uuid) ?>"><span><?= $data->title ?></span></a>
      </div>
      <div class="post-author">
        Author Name
        <img src="https://picsum.photos/300/300" alt="" class="rounded-circle" width="30" height="30">
      </div>
    </div>
    <div class="d-flex flex-row bottom-detail" style="flex:0 0 auto; height: 32px; font-size: 12px;">
      <div class="d-flex flex-row align-items-center" style="flex:0 0 auto;">
        <span class="text-success">Terpublish </span>
        <span class="mx-1" style="font-size: 10px;position: relative;top: -2px;">•</span>
        <span class="text-muted"><?= date('d M Y', strtotime($data->created_at)) ?></span>
      </div>
      <div class="d-sm-flex d-none" style="align-self: center;
  flex: auto;
  overflow: hidden;">
        <span class="post-labels" style="display: inline-flex;
    flex: 0 0 auto;
    margin-left: 12px;
    margin-right: 12px;
    gap: 6px;
    z-index: 2;">
          <button type="button" class="btn rounded-pill btn-sm btn-outline-primary" style="font-size: 10px;">Label 1</button>
          <button type="button" class="btn rounded-pill btn-sm btn-outline-primary" style="font-size: 10px;">Label 1</button>
          <button type="button" class="btn rounded-pill btn-sm btn-outline-primary" style="font-size: 10px;">Label 1</button>
        </span>
      </div>
      <button class="btn btn-sm ms-auto me-2" style="font-size: 18px;"><i class="ti ti-share"></i></button>
      <div class="d-flex flex-row align-items-center me-2">
        3 <i class="ti ti-message-circle-2 ms-1"></i>
      </div>
      <div class="d-flex flex-row align-items-center">
        3 <i class="ti ti-chart-bar"></i>
      </div>
    </div>
  </div>
</div>