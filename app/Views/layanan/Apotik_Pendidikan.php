<?= $this->extend('/layout/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/layanan.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/pages.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>
    <img src="<?= base_url('assets/img/gallery/elemen1.png') ?>" class="elemen_1">

    <section class="layanan mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-4 content">
                    <h1 class="title">APOTIK PENDIDIKAN</h1>
                </div>
                <img src="<?= base_url('assets/img/layanan/foto 9-1.png') ?>" class="image_1">
                <img src="<?= base_url('assets/img/layanan/foto 9.png') ?>" class="image_2">
            </div>
        </div>
    </section>

    <img src="<?= base_url('assets/img/gallery/elemen1.png') ?>" class="elemen_2">
<?= $this->endSection('content'); ?>