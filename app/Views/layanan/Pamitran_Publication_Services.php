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
    <img src="<?= base_url('assets/img/layanan/kuning_outline_1.png') ?>" class="elemen_1">

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
                            <p>Pelayanan publikasi di Pamitran menyediakan jasa layanan komprehensif terkait dengan publikasi artikel ilmiah sesuai Jurnal/publisher yang di targetkan penulis termasuk Jurnal internasional bereputasi dan berdampak (Q1-Q4) dan Jurnal nasional (Sinta 1-6). Pendampingan dilakukan secara secara offline dan online tanpa batas jarak dan waktu. Harga terjangkau, dan penulis dapat memilih jadwal layanan sesuai dengan waktu yang dimiliki. Tim pendamping adalah expert dan berpengalaman publikasi di jurnal nasional dan internasional.  Jenis layanan pendampingan memiliki variasi pilihan sesuai kebutuhan penulis antara lain konsultasi pemilihan jurnal, layout artikel sesuai target jurnal, submit artikel, dan merespon hasil review.  Segera REGISTER dan Dapatkan harga promo untuk  konsultasi pertama.</p>
                        </div>
                        <button class="btn btn-user mt-4" onclick="location.href='registrasi-layanan';" type="button">Registrasi Layanan</button>
                    </div>
                </div>
            </div>
    </section>

    
    <img src="<?= base_url('assets/img/layanan/kuning_outline_1.png') ?>" class="elemen_2">

    <?= $this->section('custom_js') ?>
        <script src="<?= base_url('assets/js/registrasi_layanan.js') ?>"></script>
    <?= $this->endSection('custom_js') ?>

<?= $this->endSection('content'); ?>