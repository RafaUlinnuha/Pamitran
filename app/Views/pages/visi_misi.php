<?= $this->extend('/layout/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/pages.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>
    <img src="<?= base_url('assets/img/visi_misi_thumbnail.png') ?>" class="img-fluid" style="width: 100%; height: auto;" alt="Responsive image">

    <section class="tentang-kami">
        <div class="container">
            <div class="row box p-5 mt-3">
                <div class="col-1 hidden-md">
                    <img src="<?= base_url('assets/img/tim_pamitran/elemen1.png') ?>" class="img-fluid elemen_3" alt="Responsive image">
                </div>
                <div class="col col-lg-7 col-md-12 col-sm-9 max-md">
                    <h3 class="title">Visi</h3>
                    <p class="visi">Menjadi pusat inovasi dan pengembangan kesehatan terintegrasi guna menyiapkan sumber daya insani dan teknologi baru yang berdampak pada masyarakat.</p>
                </div>
                <div class="col-4 hidden-md">
                    <img src="<?= base_url('assets/img/tim_pamitran/elemen2.png') ?>" class="img-fluid elemen_4" alt="Responsive image">
                </div>
            </div>
            <div class="row box p-5">
                <div class="col-1 hidden-md">
                    <img src="<?= base_url('assets/img/tim_pamitran/elemen1.png') ?>" class="img-fluid elemen_3" alt="Responsive image">
                </div>
                <div class="col col-lg-7 col-md-12 col-sm-9 max-md">
                    <h3 class="title">Misi</h3>
                    <p class="misi">Meningkatkan kualitas dan kompetensi lulusan rumpun ilmu kesehatan UNPAD. <br>
                    Mendiseminasikan perkembangan keilmuan kesehatan termutakhir bagi masyarakat. <br>
                    Menciptakan inovasi dan meningkatkan kerjasama riset guna menjawab persoalan-persoalan kesehatan masyarakat. <br>
                    Meningkatkan kualitas pelayanan kesehatan yang terintegrasi bagi masyarakat Jawa Barat dan Indonesia. <br>
                    Menyelenggarakan berbagai kegiatan korporasi akademik guna mendukung kemandirian institusi. <br>
                    </p>
                </div>
            </div>
            <div class="row box p-5">
                <div class="col-1 hidden-md">
                    <img src="<?= base_url('assets/img/tim_pamitran/elemen1.png') ?>" class="img-fluid elemen_3" alt="Responsive image">
                </div>
                <div class="col col-lg-7 col-md-12 col-sm-9 max-md">
                    <h3 class="title">Filosofi</h3>
                    <p class="filosofi">Menjadi pusat inovasi dan pengembangan kesehatan terintegrasi guna menyiapkan sumber daya insani dan teknologi baru yang berdampak pada masyarakat.</p>
                </div>
                <div class="col-4 hidden-md">
                    <img src="<?= base_url('assets/img/tim_pamitran/elemen3.png') ?>" class="img-fluid elemen_5" alt="Responsive image">
                </div>
            </div>
        </div>
    </section>


    <?= $this->section('custom_js') ?>
        <script src="<?= base_url('assets/js/pages.js') ?>"></script>
    <?= $this->endSection('custom_js') ?>
<?= $this->endSection('content'); ?>