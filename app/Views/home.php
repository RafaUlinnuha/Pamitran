<?= $this->extend('/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>
    <section class="carousel">
        <div id="slides" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#slides" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#slides" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#slides" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url('assets/img/contoh.jpg') ?>" class="d-block w-100" alt="silder_1">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/contoh2.jpg') ?>" class="d-block w-100" alt="silder_2">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/contoh3.jpg') ?>" class="d-block w-100" alt="silder_3">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#slides" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#slides" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="video text-center">
        <div class="container">
            <h1 class="display-4">Pamitran</h1>
            <div class="row">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti rem illum reiciendis, minima voluptatum exercitationem hic neque. Atque, itaque officiis nam necessitatibus accusamus eaque magni illo. Atque iusto sint reiciendis!</p>
            </div>
            <div class="row pt-3">
                <div class="video-promo">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/guA6BFkZdao" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="services text-center">
        <div class="container">
            <h1 class="display-4">Layanan</h1>
            <div class="row">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti rem illum reiciendis, minima voluptatum exercitationem hic neque. Atque, itaque officiis nam necessitatibus accusamus eaque magni illo. Atque iusto sint reiciendis!</p>
            </div>
            <div class="row pt-3">
                <div class="col-12 col-lg-3 mb-4">
                    <div class="border p-3 text-center">
                        <h3 class="py-2">Satu</h3>
                        <button class="btn btn-outline-dark" onclick="document.location='/layanan/satu'">Read More</button>
                    </div>
                </div>

                <div class="col-12 col-lg-3 mb-4">
                    <div class="border p-3 text-center">
                        <h3 class="py-2">Dua</h3>
                        <button class="btn btn-outline-dark" onclick="document.location='/layanan/dua'">Read More</button>
                    </div>
                </div>
                
                <div class="col-12 col-lg-3 mb-4">
                    <div class="border p-3 text-center">
                        <h3 class="py-2">Tiga</h3>
                        <button class="btn btn-outline-dark" onclick="document.location='/layanan/tiga'">Read More</button>
                    </div>
                </div>
                
                <div class="col-12 col-lg-3 mb-4">
                    <div class="border p-3 text-center">
                        <h3 class="py-2">Empat</h3>
                        <button class="btn btn-outline-dark" onclick="document.location='/layanan/empat'">Read More</button>
                    </div>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-12 col-lg-3 mb-4">
                    <div class="border p-3 text-center">
                        <h3 class="py-2">Lima</h3>
                        <button class="btn btn-outline-dark" onclick="document.location='/layanan/lima'">Read More</button>
                    </div>
                </div>

                <div class="col-12 col-lg-3 mb-4">
                    <div class="border p-3 text-center">
                        <h3 class="py-2">Enam</h3>
                        <button class="btn btn-outline-dark" onclick="document.location='/layanan/enam'">Read More</button>
                    </div>
                </div>
                
                <div class="col-12 col-lg-3 mb-4">
                    <div class="border p-3 text-center">
                        <h3 class="py-2">Tujuh</h3>
                        <button class="btn btn-outline-dark" onclick="document.location='/layanan/tujuh'">Read More</button>
                    </div>
                </div>
                
                <div class="col-12 col-lg-3 mb-4">
                    <div class="border p-3 text-center">
                        <h3 class="py-2">Delapan</h3>
                        <button class="btn btn-outline-dark" onclick="document.location='/layanan/delapan'">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?= $this->endSection('content'); ?>