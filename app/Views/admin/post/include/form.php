<div class="d-flex flex-column">
  <form action="<?= $action ?>" method="post" id="form" class="row">
    <div class="col-md-10 p-0">
      <div class="d-flex flex-column gap-2">
        <div class="d-flex flex-row gap-2">
          <div class="form-group w-100">
            <input type="text" class="form-control" id="title" placeholder="Judul" name="title" required value="<?= $data ? $data->title : '' ?>">
          </div>
          <div class="d-md-none d-flex gap-1" style="width: 100px;">
            <button type="button" class="btn w-100 btn-outline-primary px-2 py-1" id="save" style="font-size: 11px;"><i class="ti ti-eye"></i></button>
            <button type="submit" class="btn w-100 btn-primary px-2 py-1" id="preview" style="font-size: 11px;"><i class="ti ti-send"></i></button>
          </div>
        </div>
        <div class="form-group mb-3 position-relative">
          <button class="position-absolute top-1 mt-1 end-0 btn px-2 py-1 d-md-none" style="font-size: 17px;"><i class="ti ti-settings"></i></button>
          <div id="editor"><?= $data ? $data->content : '' ?></div>
          <textarea style="display: none" id="content" name="content"></textarea>
        </div>
      </div>
    </div>
    <div class="col-md-2 px-2 d-md-block d-none">
      <div class="d-md-flex d-none flex-row gap-1" style="height: 2.45rem;">
        <div class="btn-group w-100">
          <button type="button" class="btn btn-outline-primary px-1 py-1" id="save" style="font-size: 11px;"><i class="ti ti-eye"></i> Pratinjau</button>
          <div class="btn-group">
            <button class="btn btn-outline-primary dropdown-toggle px-2 py-1" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 11px;"></button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">Pratinjau</a></li>
              <li><a class="dropdown-item" href="#">Simpan</a></li>
              <?php if ($do == 'update') : ?>
                <li><a class="dropdown-item post-delete" href="<?= url_to('Admin\PostController::delete', $data->uuid) ?>">Hapus</a></li>
              <?php endif ?>
            </ul>
          </div>
        </div>
        <button type="submit" class="btn btn-primary px-2 py-1 w-75" id="preview" style="font-size: 11px;">Publish</button>
      </div>
      <h4 class="mt-3" style="font-size: 14px;">Pengaturan Post</h4>
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button px-0 py-2 collapsed" style="font-size: 13px;" type="button" data-bs-toggle="collapse"  data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
              Label
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body px-0 py-1">
              <div class="w-100">
                <select class="form-control form-control-sm" id="label" placeholder="Label" name="label" multiple></select>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button px-0 py-2 collapsed" style="font-size: 13px;" type="button" data-bs-toggle="collapse"  data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo"> 
              Tanggal
            </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body px-0 py-1">
              <input type="datetime-local" class="form-control" id="datetime" placeholder="Tanggal" name="date" required value="<?= date('Y-m-d\TH:i:s', strtotime($data ? $data->created_at : 'now')) ?>">
            </div>
          </div>
        </div>
        <div class="accordion-item" x-data="{description: ''}">
          <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button px-0 py-2 collapsed" style="font-size: 13px;" type="button" data-bs-toggle="collapse"  data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
              Deskripsi
            </button>
          </h2>
          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body px-0 py-1">
              <textarea class="form-control p-1" id="description" placeholder="Deskripsi" name="description" x-model="description" 
              x-on:keydown="if(description.length >= 150 && event.keyCode != 8) event.preventDefault()"></textarea>
              <div class="d-flex justify-content-end" style="font-size: 10px;">
                <span x-text="description.length"></span>/150
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>