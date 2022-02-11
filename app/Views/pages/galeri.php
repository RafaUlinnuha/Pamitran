<?= $this->extend('/layout/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/pages.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>
    <header>
        <h1 class="h1-pages">Galeri</h1>
    </header>

    <section class="gallery">
        <div class="container-lg">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                <div class="col">
                    <img class="img-pages" src="<?= base_url('assets/img/1.jpg') ?>" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img class="img-pages" src="<?= base_url('assets/img/2.jpg') ?>" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img class="img-pages" src="<?= base_url('assets/img/3.jpg') ?>" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img class="img-pages" src="<?= base_url('assets/img/4.jpg') ?>" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img class="img-pages" src="<?= base_url('assets/img/5.jpg') ?>" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img class="img-pages" src="<?= base_url('assets/img/6.jpg') ?>" class="gallery-item" alt="gallery">
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="gallery-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="img-pages" src="<?= base_url('assets/img/1.jpg') ?>" class="modal-img" alt="modal img">
                </div>
            </div>
        </div>
    </div>

    <?= $this->section('custom_js') ?>
        <script src="<?= base_url('assets/js/pages.js') ?>"></script>
    <?= $this->endSection('custom_js') ?>
<?= $this->endSection('content'); ?>