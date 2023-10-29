<?= $this->extend('layouts/layout_guest_main'); ?>

<?= $this->section('content'); ?>
    <div class="row">
        <div class="col-md-6 mx-auto mt-5">
            <div class="d-flex flex-row">
                <?php if($posts) : ?>
                    <?php foreach($posts as $p ) : ?>
                        <a href="#" class="mb-2">
                            <div class="card flex-row w-100 p-0">
                                <div class="card-header p-0">
                                    <img src="<?= $p['img_thumbnail'] ?>" alt="..." class="rounded-1" style="width: 150px; height: 150px; object-fit: cover;">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?= $p['title'] ?></h4>
                                    <p class="text-dark m-0"><?= $p['description'] ?></p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach ?>
                <?php else : ?>
                    <div class="alert alert-warning mx-auto" role="alert">
                        Check again later, there is no post yet.
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>