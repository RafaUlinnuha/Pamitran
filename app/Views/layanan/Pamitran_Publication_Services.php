<?php
	$this->session = session();
    $errors = $this->session->getFlashdata('errors');

?>

<?= $this->extend('/layout/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/layanan.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>

    <?php if ($this->session->get('errors')) : ?>
        <div id="errors" data-swal="<?= $this->session->get('errors'); ?>"></div>
    <?php endif; ?>

    <section class="about p-5 mt-5">
        <div class="container p-5">
            <h1>Pamitran Publication Services</h1>
            <div class="row pt-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita aliquid dolorum similique! Debitis quas modi mollitia sequi? Vitae quae provident nulla itaque at neque commodi soluta! Explicabo eius excepturi ratione. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos doloribus commodi voluptate, ab illum obcaecati necessitatibus sunt praesentium assumenda qui quo temporibus minus magnam deleniti quibusdam velit, tenetur possimus? Autem?</p>
            </div>
            <button class="btn btn-primary mt-4" onclick="location.href='registrasi-layanan';" type="button">Registrasi Layanan</button>
        </div>
    </section>

    <?= $this->section('custom_js') ?>
        <script src="<?= base_url('assets/js/registrasi_layanan.js') ?>"></script>
    <?= $this->endSection('custom_js') ?>

<?= $this->endSection('content'); ?>