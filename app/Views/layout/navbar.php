<?php
	$session = session();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light text-center">
    <div class="container">

        <a class="navbar-brand" href="/">
            <img src="<?= base_url('assets/img/logo.png') ?>" width="35" height="35" alt="">
            P A M I T R A N               
        </a>

        <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" 
            aria-controls="navbarNav" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <?php if($session->role=='admin') : ?>
                    <li class="nav-item mx-2">
                        <a class="nav-link" aria-current="page" href="/admin">Kelola User</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" aria-current="page" href="/layanan-publikasi">Layanan Publikasi</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" aria-current="page" href="/logout">Logout</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item mx-2">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Tentang Kami</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/visi-misi">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="/tim-pamitran">Tim Pamitran</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/galeri">Galeri</a>
                    </li>
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Layanan</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/endoskopi-training-center">Endoskopi Training Center</a></li>
                            <li><a class="dropdown-item" href="/dental-training-center">Dental Training Center</a></li>
                            <li><a class="dropdown-item" href="/osce-training-center">OSCE Training Center</a></li>
                            <li><a class="dropdown-item" href="/pamitran-publication-services">Pamitran Publication Services</a></li>
                            <li><a class="dropdown-item" href="/kerjasama-penelitian">Kerjasama Penelitian</a></li>
                            <li><a class="dropdown-item" href="/apotik-pendidikan">Apotik Pendidikan</a></li>
                            <li><a class="dropdown-item" href="/puspa-daycare">Puspa Daycare</a></li>
                            <li><a class="dropdown-item" href="/kemoterapi">Kemoterapi</a></li>
                            <li><a class="dropdown-item" href="/perawatan-covid">Perawatan Covid</a></li>
                            <li><a class="dropdown-item" href="/palliative-care">Palliative Care</a></li>
                            <li><a class="dropdown-item" href="/poliklinik-infeksi">Poliklinik Infeksi</a></li>
                            <li><a class="dropdown-item" href="/pojok-lansia">Pojok Lansia</a></li>
                            <li><a class="dropdown-item" href="/cafe-dan-restoran">Cafe dan Restoran</a></li>
                            <li><a class="dropdown-item" href="/atm-center">ATM Center</a></li>
                            <li><a class="dropdown-item" href="/laboratorium">Laboratorium</a></li>
                            <li><a class="dropdown-item" href="/conference-room">Conference Room</a></li>
                        </ul>
                    </li>
                    <?php if(!$session->isLoggedIn): ?>
                        <li class="nav-item mx-2">
                            <a class="btn-register nav-link" aria-current="page" href="/register">Register</a> 
                        <li>
                        <li class="nav-item mx-2">
                            <a class="btn-login nav-link" aria-current="page" href="/login">Login</a> 
                        </li>
                    <?php else: ?>
                        <li class="nav-item dropdown mx-1">
                            <a class="d-inline nav-link mx-2" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><?= $session->nama; ?></a>
                            <img class="d-inline" src="<?= base_url('assets/img/profile/icon_profile.png') ?>" data-bs-toggle="dropdown" role="button" width="40.05" height="40" alt="">
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/user">Data Pribadi</a></li>
                                <li><a class="dropdown-item" href="/edit">Ubah Profil</a></li>
                                <li><a class="dropdown-item" href="/change-password">Ubah Kata Sandi</a></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item-sm">
                            <a class="nav-link" href="/logout">Logout</a>
                        </li> -->
                    <?php endif ?>
                <?php endif ?>
            </ul>
            <!-- <form class="d-flex">
                <button class="btn btn-outline-success" type="submit">Search</button>
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
        </div>
    </div>
</nav>