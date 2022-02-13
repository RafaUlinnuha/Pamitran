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
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/carousel/slide2.png') ?>" class="d-block w-100" alt="silder_2">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/carousel/slide3.png') ?>" class="d-block w-100" alt="silder_3">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/carousel/slide4.png') ?>" class="d-block w-100" alt="silder_4">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/carousel/slide5.png') ?>" class="d-block w-100" alt="silder_5">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/carousel/slide6.png') ?>" class="d-block w-100" alt="silder_6">
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
            <h1 style="background-color: rgba(0, 168, 156, 1);" class="title">P A M I T R A N</h1>
            <div class="reveal">
                <div class="row pt-3">
                    <p class="p-home">Pusat Akademi, Inovasi, Teknologi, dan Riset (PAMITRAN) - Medical Education, Development, and Innovation Center Universitas Padjadjaran (MEDIC-UP) adalah suatu wadah untuk mengintegrasikan fakultas rumpun kesehatan(Fakultas Kedokteran, Fakultas Kedokteran Gigi, Fakultas Farmasi, Fakultas Keperawatan, dan Fakultas Psikologi) dan juga fakultas lain yang terkait dengan bidang kesehatan serta fakultas ekonomi dan bisnis. 
                    </p>
                    <br><br>
                    <p class="p-home">Masing-masing fakultas dapat mengembangkan ide bisnisnya dengan memanfaatkan ruangan yang ada serta rencana sinergitasnya dengan kalangan swasta atau publik. Dengan kolaborasi tersebut, pemanfaatan Gedung Eijkman diharapkan lebih optimal dan nilai tambah yang diperoleh dapat dimanfaatkan secara merata oleh fakultas-fakultas tersebut dalam memajukan kegiatan Tri Dharma Perguruan Tinggi.</p>
                    <br><br>
                    <p class="p-home">PAMITRAN-UP dibentuk pada tanggal 1 September 2021 di Bandung berdasarkan Keputusan Rektor Universitas Padjadjaran Nomor: 2069/UN6.RKT/ Kep/HK/2021 tentang Pembentukan dan Pengangkatan Pengelola Satuan Usaha Pusat Akademik, Inovasi, Teknologi, dan Riset Kesehatan Universitas Padjadjaran (PAMITRAN-UP).</p>
                </div>
            </div>
        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 210"><path fill="#e7cf7a" fill-opacity="0.4" d="M0,128L1440,64L1440,320L0,320Z"></path></svg>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 210"><path fill="#e7cf7a" fill-opacity="1" d="M0,64L40,64C80,64,160,64,240,90.7C320,117,400,171,480,165.3C560,160,640,96,720,85.3C800,75,880,117,960,122.7C1040,128,1120,96,1200,74.7C1280,53,1360,43,1400,37.3L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg> -->
    
    <section class="services text-center">
        <div class="container p-5">
            <h1>L A Y A N A N</h1>
            <div class="reveal">
                <div class="row pt-3">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti rem illum reiciendis, minima voluptatum exercitationem hic neque. Atque, itaque officiis nam necessitatibus accusamus eaque magni illo. Atque iusto sint reiciendis!</p>
                </div>
                <div class="row pt-3">
                    <div class="col-12 col-lg-3 mb-4">
                        <div class="card card-1 p-3 text-center">
                            <h4 class="py-2">Endoskopi Training Center</h4>
                            <button class="btn btn-outline-dark" onclick="document.location='/Endoskopi_Training_Center'">Read More</button>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 mb-4">
                        <div class="card card-1 p-3 text-center">
                            <h4 class="py-2">Dental Training Center</h4>
                            <button class="btn btn-outline-dark" onclick="document.location='/Dental_Training_Center'">Read More</button>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-3 mb-4">
                        <div class="card card-1 p-3 text-center">
                            <h4 class="py-2">OSCE Training Center</h4>
                            <button class="btn btn-outline-dark" onclick="document.location='/OSCE_Training_Center'">Read More</button>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-3 mb-4">
                        <div class="card card-1 p-3 text-center">
                            <h4 class="py-2">Kerjasama Penelitian</h4>
                            <button class="btn btn-outline-dark" onclick="document.location='/Kerjasama_Penelitian'">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-12 col-lg-3 mb-4">
                        <div class="card card-1 p-3 text-center">
                            <h4 class="py-2">Pamitran Publication Services</h4>
                            <button class="btn btn-outline-dark" onclick="document.location='/Pamitran_Publication_Services'">Read More</button>
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
                            <button class="btn btn-outline-dark" onclick="document.location='/delapan'">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 210"><path fill="#e7cf7a" fill-opacity="0.4" d="M0,128L1440,64L1440,0L0,0Z"></path></svg>

    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 210"><path fill="#e7cf7a" fill-opacity="1" d="M0,64L40,64C80,64,160,64,240,90.7C320,117,400,171,480,165.3C560,160,640,96,720,85.3C800,75,880,117,960,122.7C1040,128,1120,96,1200,74.7C1280,53,1360,43,1400,37.3L1440,32L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg> -->
    
    <section class="video text-center p-5">
        <div class="container p-5">
            <h1>Video Pamitran</h1>
            <div class="reveal">
                <div class="row pt-3">
                    <div class="video-promo iframe-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_y9oH6UXEhQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?= $this->section('custom_js') ?>
        <script src="<?= base_url('assets/js/home.js') ?>"></script>
    <?= $this->endSection('custom_js') ?>
<?= $this->endSection('content'); ?>