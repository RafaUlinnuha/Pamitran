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
                <div class="col-3 mt-3">
                    <img src="<?= base_url('assets/img/layanan.png') ?>" class="img_layanan">
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 mt-4 content">
                    <h1 class="title">KERJASAMA PENELITIAN</h1>
                    <div class="layanan_text row pt-3">
                        <p>Pamitran terbuka dengan peluang kolaborasi penelitian dengan bidang kajian kesehatan interdisiplin untuk mendukung bidang-bidang prioritas/unggulan program kesehatan khususnya pencapaian target Sustainable Development Goals (SDGs). Kolaborasi penelitian dapat dilakukan antar keilmuan, antar Lembaga pemerintah, elemen masyarakat, dan mitra industry sesuai dengan focus program pemerintah dan unggulan Universitas Padjadjaran. Tujuan layanan kolaborasi penelitian adalah meningkatkan peran Pamitran pada perkembangan ilmu dan riset dibidang kesehatan, kolaborasi peneliti dari berbagai keilmuan akan menghasilkan penelitian bermutu tinggi dan komprehensif, meningkatkan jejaring Kerjasama antara akademisi, praktisi, peneliti, dan industry dalam mengembangkan inovasi-inovasi kesehatan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <img src="<?= base_url('assets/img/gallery/elemen1.png') ?>" class="elemen_2">
<?= $this->endSection('content'); ?>