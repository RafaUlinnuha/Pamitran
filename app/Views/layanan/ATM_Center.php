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
                    <h1 class="title">ATM CENTER</h1>
                    <div class="layanan_text row pt-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis urna sed vulputate urna iaculis tristique. Erat turpis ultrices in posuere est. Venenatis ante in vivamus tristique elit tempor. Iaculis in sit sed enim odio. Risus, eu morbi libero quis sit sed mattis nulla. Amet fusce pellentesque sodales pellentesque morbi. Ultricies tincidunt imperdiet sit non dolor at. Urna vel lobortis mauris venenatis, at a dolor.</p>
                        <p>Lectus euismod morbi faucibus in. Feugiat placerat amet nisl gravida elit at molestie non. Amet, amet vitae dui sed. Consectetur egestas bibendum proin massa purus ullamcorper. Vestibulum mauris at feugiat feugiat. Phasellus erat augue at ut duis proin aliquam fringilla scelerisque. Eu eget augue ante bibendum sed. Sem dignissim volutpat in hendrerit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <img src="<?= base_url('assets/img/gallery/elemen1.png') ?>" class="elemen_2">
<?= $this->endSection('content'); ?>