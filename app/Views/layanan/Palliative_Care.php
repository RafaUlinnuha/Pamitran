<?= $this->extend('/layout/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/layanan.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/pages.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>
    <img src="<?= base_url('assets/img/layanan/ijo_1.png') ?>" class="elemen_1">

    <section class="layanan mt-5">
        <div class="container">
            <div class="row">
                <div class="col-3 mt-3">
                    <img src="<?= base_url('assets/img/layanan.png') ?>" class="img_layanan">
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 mt-4 content">
                    <h1 class="title">PALLIATIVE CARE</h1>
                    <div class="layanan_text row pt-3">
                        <p>Merupakan perawatan pada seorang pasien dan keluarganya yang memiliki penyakit yang tidak dapat disembuhkan dengan cara memaksimalkan kualitas hidup pasien serta mengurangi gejala yang mengganggu, mengurangi nyeri dengan memperhatikan aspek psikologis dan spiritual.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <img src="<?= base_url('assets/img/layanan/ijo_1.png') ?>" class="elemen_2">
<?= $this->endSection('content'); ?>