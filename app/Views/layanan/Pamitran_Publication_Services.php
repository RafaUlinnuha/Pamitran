<?php
	$this->session = session();
    $errors = $this->session->getFlashdata('errors');

?>

<?= $this->extend('/layout/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/layanan.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/pages.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>
    <img src="<?= base_url('assets/img/gallery/elemen1.png') ?>" class="elemen_1">

    <?php if ($this->session->get('errors')) : ?>
        <div id="errors" data-swal="<?= $this->session->get('errors'); ?>"></div>
    <?php endif; ?>

    <section class="layanan mt-5">
        <div class="container">
            <div class="row">
                    <div class="col-3 mt-3">
                        <img src="<?= base_url('assets/img/layanan.png') ?>" class="img_layanan">
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 mt-4 content">
                        <h1 class="title">PAMITRAN PUBLICATION SERVICES</h1>
                        <div class="layanan_text row pt-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis urna sed vulputate urna iaculis tristique. Erat turpis ultrices in posuere est. Venenatis ante in vivamus tristique elit tempor. Iaculis in sit sed enim odio. Risus, eu morbi libero quis sit sed mattis nulla. Amet fusce pellentesque sodales pellentesque morbi. Ultricies tincidunt imperdiet sit non dolor at. Urna vel lobortis mauris venenatis, at a dolor.</p>
                        </div>
                        <button class="btn btn-primary mt-4" onclick="location.href='registrasi-layanan';" type="button">Registrasi Layanan</button>
                    </div>
                </div>
            </div>
    </section>

    
    <img src="<?= base_url('assets/img/gallery/elemen1.png') ?>" class="elemen_2">

    <?= $this->section('custom_js') ?>
        <script src="<?= base_url('assets/js/registrasi_layanan.js') ?>"></script>
    <?= $this->endSection('custom_js') ?>

<?= $this->endSection('content'); ?>