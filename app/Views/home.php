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

    <img src="<?= base_url('assets/img/home/elemen1.png') ?>" class="elemen_1">
    <img src="<?= base_url('assets/img/home/elemen2.png') ?>" class="elemen_2">
    <section class="about p-5">
        <div class="container container-home">
            <h1 class="title about_title">PAMITRAN</h1>
            <div class="reveal">
                <div class="row about_text">
                    <p>
                        Pusat Akademi, Inovasi, Teknologi, dan Riset (PAMITRAN) - Medical Education, Development, and Innovation Center Universitas Padjadjaran (MEDIC-UP) adalah suatu wadah untuk mengintegrasikan fakultas rumpun kesehatan (Fakultas Kedokteran, Fakultas Kedokteran Gigi, Fakultas Farmasi, Fakultas Keperawatan, dan Fakultas Psikologi) dan juga fakultas lain yang terkait dengan bidang kesehatan serta fakultas ekonomi dan bisnis. 
                    </p>
                    <br><br>
                    <p>
                        Masing-masing fakultas dapat mengembangkan ide bisnisnya dengan memanfaatkan ruangan yang ada serta rencana sinergitasnya dengan kalangan swasta atau publik. Dengan kolaborasi tersebut, pemanfaatan Gedung Eijkman diharapkan lebih optimal dan nilai tambah yang diperoleh dapat dimanfaatkan secara merata oleh fakultas-fakultas tersebut dalam memajukan kegiatan Tri Dharma Perguruan Tinggi.
                    </p>
                    <br><br>
                    <p>
                        PAMITRAN-UP dibentuk pada tanggal 1 September 2021 di Bandung berdasarkan Keputusan Rektor Universitas Padjadjaran Nomor: 2069/UN6.RKT/ Kep/HK/2021 tentang Pembentukan dan Pengangkatan Pengelola Satuan Usaha Pusat Akademik, Inovasi, Teknologi, dan Riset Kesehatan Universitas Padjadjaran (PAMITRAN-UP).
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 210"><path fill="#e7cf7a" fill-opacity="0.4" d="M0,128L1440,64L1440,320L0,320Z"></path></svg> -->
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 210"><path fill="#e7cf7a" fill-opacity="0.4" d="M0,64L40,64C80,64,160,64,240,90.7C320,117,400,171,480,165.3C560,160,640,96,720,85.3C800,75,880,117,960,122.7C1040,128,1120,96,1200,74.7C1280,53,1360,43,1400,37.3L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg> -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 110 1440 210"><path fill="#e7cf7a" fill-opacity="0.5" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    
    <section class="services text-center">
        <div class="container container-home p-5">
            <h1  class="title layanan_title">LAYANAN</h1>
            <div class="reveal">
                <div class="row layanan_text">
                    <p>Inovasi, Pengembangan, dan Layanan Kesehatan di PAMITRAN-UP berkualitas prima, terpadu, terintegrasi, unggul, terdepan, multidisplin, dan berorientasi untuk masyarakat dan bangsa. Layanan meliputi: </p>
                </div>
                <div class="row pt-3">
                    <div class="col-12 col-lg-3 col-md-6 mb-4">
                        <div class="card card-1">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Endoskopi Training Center</h4>
                                <button class="align-self-end btn btn-outline-dark mt-auto" onclick="document.location='/endoskopi-training-center'">Read More</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-6 mb-4">
                        <div class="card card-2">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Dental Training Center</h4>
                                <button class="align-self-end btn btn-outline-dark mt-auto" onclick="document.location='/dental-training-center'">Read More</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-3 col-md-6 mb-4">
                        <div class="card card-3">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">OSCE Training Center</h4>
                                <button class="align-self-end btn btn-outline-dark mt-auto" onclick="document.location='/osce-training-center'">Read More</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-6 mb-4">
                        <div class="card card-4">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Publication Services</h4>
                                <button class="align-self-end btn btn-outline-dark mt-auto" onclick="document.location='/pamitran-publication-services'">Read More</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row pt-3">
                    <div class="col-12 col-lg-3 col-md-6 mb-4">
                        <div class="card card-5">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Kerjasama Penelitian</h4>
                                <button class="align-self-end btn btn-outline-dark mt-auto" onclick="document.location='/kerjasama-penelitian'">Read More</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-6 mb-4">
                        <div class="card card-6">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Apotik Pendidikan</h4>
                                <button class="align-self-end btn btn-outline-dark mt-auto" onclick="document.location='/apotik-pendidikan'">Read More</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-3 col-md-6 mb-4">
                        <div class="card card-7">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title ">Puspa Daycare</h4>
                                <button class="align-self-end btn btn-outline-dark mt-auto" onclick="document.location='/puspa-daycare'">Read More</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-3 col-md-6 mb-4">
                        <div class="card card-8">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Kemoterapi</h4>
                                <button class="align-self-end btn btn-outline-dark mt-auto" onclick="document.location='/kemoterapi'">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-3">
                    <div class="col-12 col-lg-3 col-md-6 mb-4">
                        <div class="card card-9">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Perawatan Covid</h4>
                                <button class="align-self-end btn btn-outline-dark mt-auto" onclick="document.location='/perawatan-covid'">Read More</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-6 mb-4">
                        <div class="card card-10">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Palliative Care</h4>
                                <button class="align-self-end btn btn-outline-dark mt-auto" onclick="document.location='/palliative-care'">Read More</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-3 col-md-6 mb-4">
                        <div class="card card-11">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Poliklinik Infeksi</h4>
                                <button class="align-self-end btn btn-outline-dark mt-auto" onclick="document.location='/poliklinik-infeksi'">Read More</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-3 col-md-6 mb-4">
                        <div class="card card-12">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Pojok Lansia</h4>
                                <button class="align-self-end btn btn-outline-dark mt-auto" onclick="document.location='/pojok-lansia'">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-3">
                    <div class="col-12 col-lg-3 col-md-6 mb-4">
                        <div class="card card-13">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Cafe dan Restoran</h4>
                                <button class="align-self-end btn btn-outline-dark mt-auto" onclick="document.location='/cafe-dan-restoran'">Read More</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-6 mb-4">
                        <div class="card card-14">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">ATM Center</h4>
                                <button class="align-self-end btn btn-outline-dark mt-auto" onclick="document.location='/atm-center'">Read More</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-3 col-md-6 mb-4">
                        <div class="card card-15">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Laboratorium</h4>
                                <button class="align-self-end btn btn-outline-dark mt-auto" onclick="document.location='/laboratorium'">Read More</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-3 col-md-6 mb-4">
                        <div class="card card-16">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Conference Rooms</h4>
                                <button class="align-self-end btn btn-outline-dark mt-auto" onclick="document.location='/conference-room'">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 210"><path fill="#e7cf7a" fill-opacity="0.4" d="M0,128L1440,64L1440,0L0,0Z"></path></svg> -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 210"><path fill="#e7cf7a" fill-opacity="0.5" d="M0,64L40,64C80,64,160,64,240,90.7C320,117,400,171,480,165.3C560,160,640,96,720,85.3C800,75,880,117,960,122.7C1040,128,1120,96,1200,74.7C1280,53,1360,43,1400,37.3L1440,32L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
     -->

    <section class="video text-center p-5">
        <div class="container container-home">
            <h1  class="title video_title">VIDEO PROFIL</h1>
            <!-- <div class="video_box"> -->
                <!-- <div class="row"> -->
                    <div class="video_box">
                        <div class="iframe_container">
                            <iframe src="https://www.youtube.com/embed/_y9oH6UXEhQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                <!-- </div> -->
            <!-- </div> -->
        </div>
    </section>

    <?= $this->section('custom_js') ?>
        <script src="<?= base_url('assets/js/home.js') ?>"></script>
    <?= $this->endSection('custom_js') ?>
<?= $this->endSection('content'); ?>