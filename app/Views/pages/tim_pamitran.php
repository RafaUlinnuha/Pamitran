<?= $this->extend('/layout/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/pages.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>
    <header>
        <h1 class="h1-pages">Tim Pamitran</h1>
    </header>

    <section class="tentang-kami">
        <div class="container-lg">
            <div class="row p-3">
                <div class="col">
                    <img class="img-pages" src="<?= base_url('assets/img/tim_pamitran/strukturorganisasi.png') ?>" class="gallery-item" alt="gallery">
                </div>
            </div>
            <div class="row p-3">
                <div class="col">
                    <img class="img-pages" src="<?= base_url('assets/img/tim_pamitran/direktur.png') ?>" class="gallery-item" alt="gallery">
                </div>
            </div>
            <div class="row p-3">
                <div class="col">
                    <img class="img-pages" src="<?= base_url('assets/img/tim_pamitran/manager.png') ?>" class="gallery-item" alt="gallery">
                </div>
            </div>
            <div class="row p-3">
                <div class="col">
                    <img class="img-pages" src="<?= base_url('assets/img/tim_pamitran/staf.png') ?>" class="gallery-item" alt="gallery">
                </div>
            </div>
        </div>
    </section>

    <?= $this->section('custom_js') ?>
        <script src="<?= base_url('assets/js/pages.js') ?>"></script>
    <?= $this->endSection('custom_js') ?>
<?= $this->endSection('content'); ?>