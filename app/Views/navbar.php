<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/navbar.css') ?>">
<?= $this->endSection('custom_css') ?>

<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Pamitran
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
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tentang">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/galeri">Galeri</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Layanan</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Satu</a></li>
                        <li><a class="dropdown-item" href="#">Dua</a></li>
                        <li><a class="dropdown-item" href="#">Tiga</a></li>
                        <li><a class="dropdown-item" href="#">Empat</a></li>
                        <li><a class="dropdown-item" href="#">Lima</a></li>
                        <li><a class="dropdown-item" href="#">Enam</a></li>
                        <li><a class="dropdown-item" href="#">Tujuh</a></li>
                        <li><a class="dropdown-item" href="#">Delapan</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>