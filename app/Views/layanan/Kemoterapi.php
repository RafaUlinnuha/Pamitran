<?= $this->extend('/layout/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/layanan.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/pages.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>
    <img src="<?= base_url('assets/img/layanan/kuning_outline_1.png') ?>" class="elemen_1">

    <section class="layanan mt-5">
        <div class="container">
            <div class="row">
                <div class="col-3 mt-3">
                    <img src="<?= base_url('assets/img/layanan.png') ?>" class="img_layanan">
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 mt-4 content">
                    <h1 class="title">KEMOTERAPI</h1>
                    <div class="layanan_text row pt-3">
                        <p>Unit Kemoterapi Pamitran menuju pelayanan kemoterapi. Ruang kemoterapi terletak di lantai 2 dengan perlengkapan tempat tidur,  sofa , dan ruang ber-AC yang nyaman. Pelayanan diberikan oleh tenaga medis dan perawat yang berpengalaman dan  terlatih, dilengkapi dengan ruang pendukung pencampuran obat kemoterapi yang aman dan dilakukan oleh farmasist yang berpengalaman. Sebelum dilakukan kemoterapi, pasien dan keluarga akan mendapatkan pendampingan dan konseling tentang proses, tahapan, dan edukasi kesehatan lain untuk mempersiapkan fisik dan mental pasien dan keluarga. Konsultasi dan observasi paska kemoterapi akan menjadi bagian fasilitas sekaligus support dari pembeli pelayanan dengan pasien. Center ini dikembangkan dengan pendekatan research-based sehingga masalah, intervensi, dan  berbagai inovasi layanan terus dikembangkan untuk meningkatkan kualitas layanan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <img src="<?= base_url('assets/img/layanan/kuning_outline_1.png') ?>" class="elemen_2">
<?= $this->endSection('content'); ?>