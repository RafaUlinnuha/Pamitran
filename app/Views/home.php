<?= $this->extend('/layout/base'); ?>

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
                <button type="button" data-bs-target="#slides" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#slides" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#slides" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url('assets/img/carousel/slide1.png') ?>" class="d-block w-100" alt="silder_1">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Gedung Pamitran</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/carousel/slide2.png') ?>" class="d-block w-100" alt="silder_2">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Logo Pamitran</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/carousel/slide3.png') ?>" class="d-block w-100" alt="silder_3">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Visi Misi Pamitran</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/carousel/slide4.png') ?>" class="d-block w-100" alt="silder_4">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/carousel/slide5.png') ?>" class="d-block w-100" alt="silder_5">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/carousel/slide6.png') ?>" class="d-block w-100" alt="silder_6">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
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

    <section class="about p-5">
        <div class="container p-5">
            <h1>Pamitran</h1>
            <div class="reveal">
                <div class="row pt-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita aliquid dolorum similique! Debitis quas modi mollitia sequi? Vitae quae provident nulla itaque at neque commodi soluta! Explicabo eius excepturi ratione. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos doloribus commodi voluptate, ab illum obcaecati necessitatibus sunt praesentium assumenda qui quo temporibus minus magnam deleniti quibusdam velit, tenetur possimus? Autem?</p>
                </div>
            </div>
        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 210"><path fill="#e7cf7a" fill-opacity="1" d="M0,64L40,64C80,64,160,64,240,90.7C320,117,400,171,480,165.3C560,160,640,96,720,85.3C800,75,880,117,960,122.7C1040,128,1120,96,1200,74.7C1280,53,1360,43,1400,37.3L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    
    <section class="services text-center">
        <div class="container p-5">
            <h1>Layanan</h1>
            <div class="reveal">
                <div class="row pt-3">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti rem illum reiciendis, minima voluptatum exercitationem hic neque. Atque, itaque officiis nam necessitatibus accusamus eaque magni illo. Atque iusto sint reiciendis!</p>
                </div>
                <div class="row pt-3">
                    <div class="col-12 col-lg-3 mb-4">
                        <div class="card card-1 p-3 text-center">
                            <h4 class="py-2">Satu</h4>
                            <button class="btn btn-outline-dark" onclick="document.location='/layanan/satu'">Read More</button>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 mb-4">
                        <div class="card card-1 p-3 text-center">
                            <h4 class="py-2">Dua</h4>
                            <button class="btn btn-outline-dark" onclick="document.location='/layanan/dua'">Read More</button>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-3 mb-4">
                        <div class="card card-1 p-3 text-center">
                            <h4 class="py-2">Tiga</h4>
                            <button class="btn btn-outline-dark" onclick="document.location='/layanan/tiga'">Read More</button>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-3 mb-4">
                        <div class="card card-1 p-3 text-center">
                            <h4 class="py-2">Empat</h4>
                            <button class="btn btn-outline-dark" onclick="document.location='/layanan/empat'">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-12 col-lg-3 mb-4">
                        <div class="card card-1 p-3 text-center">
                            <h4 class="py-2">Lima</h4>
                            <button class="btn btn-outline-dark" onclick="document.location='/layanan/lima'">Read More</button>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 mb-4">
                        <div class="card card-1 p-3 text-center">
                            <h4 class="py-2">Enam</h4>
                            <button class="btn btn-outline-dark" onclick="document.location='/layanan/enam'">Read More</button>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-3 mb-4">
                        <div class="card card-1 p-3 text-center">
                            <h4 class="py-2">Tujuh</h4>
                            <button class="btn btn-outline-dark" onclick="document.location='/layanan/tujuh'">Read More</button>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-3">
                        <div class="card card-1 p-3 text-center">
                            <h4 class="py-2">Delapan</h4>
                            <button class="btn btn-outline-dark" onclick="document.location='/layanan/delapan'">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 210"><path fill="#e7cf7a" fill-opacity="1" d="M0,64L40,64C80,64,160,64,240,90.7C320,117,400,171,480,165.3C560,160,640,96,720,85.3C800,75,880,117,960,122.7C1040,128,1120,96,1200,74.7C1280,53,1360,43,1400,37.3L1440,32L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
    
    <section class="video text-center p-5">
        <div class="container p-5">
            <h1>Video Pamitran</h1>
            <div class="reveal">
                <div class="row pt-3">
                    <div class="video-promo">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/guA6BFkZdao" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?= $this->section('custom_js') ?>
        <script src="<?= base_url('assets/js/home.js') ?>"></script>
    <?= $this->endSection('custom_js') ?>
<?= $this->endSection('content'); ?>