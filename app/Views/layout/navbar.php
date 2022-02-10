<?php
	$session = session();
?>

<nav class="navbar navbar-expand-md navbar-light bg-light text-center">
    <div class="container">
        <a class="navbar-brand" href="/">
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
                <?php if($session->level==1) : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/admin">Manage User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/logout">Logout</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Tentang Kami</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/visi_misi">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="/tim_pamitran">Tim Pamitran</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/galeri">Galeri</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Layanan</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/layanan/satu">Satu</a></li>
                            <li><a class="dropdown-item" href="/layanan/dua">Dua</a></li>
                            <li><a class="dropdown-item" href="/layanan/tiga">Tiga</a></li>
                            <li><a class="dropdown-item" href="/layanan/empat">Empat</a></li>
                            <li><a class="dropdown-item" href="/layanan/lima">Lima</a></li>
                            <li><a class="dropdown-item" href="/layanan/enam">Enam</a></li>
                            <li><a class="dropdown-item" href="/layanan/tujuh">Tujuh</a></li>
                            <li><a class="dropdown-item" href="/delapan">Delapan</a></li>
                        </ul>
                    </li>
                    <?php if(!$session->isLoggedIn): ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/login">Login</a> 
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/register">Register</a> 
                        </li>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">My Account</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/user">Account Details</a></li>
                                <li><a class="dropdown-item" href="/edit">Edit Account</a></li>
                                <li><a class="dropdown-item" href="/change_password">Change Password</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Logout</a>
                        </li>
                    <?php endif ?>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>