<?= $this->extend('/layout/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/pages.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>
    <img src="<?= base_url('assets/img/gallery/elemen1.png') ?>" class="elemen_1">

    <section class="gallery">
        <div class="container-lg">
            <h1 class="galeri_title">GALERI</h1>
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

    <img src="<?= base_url('assets/img/gallery/elemen1.png') ?>" class="elemen_2">
<?= $this->endSection('content'); ?>