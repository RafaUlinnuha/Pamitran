<?php
	$this->session = session();
    $success = $this->session->getFlashdata('success');
    
    if(!$this->session->role=='user'){
        echo "<script>history.go(-1);</script>";
        die(); 
    }
?>

<?= $this->extend('/layout/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/profile.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>
    <div class="header"></div>
    
    <?php if ($this->session->get('success')) : ?>
        <div id="success" data-swal="<?= $this->session->get('success'); ?>"></div>
    <?php endif; ?>

    <div class="form-bg">
        <div class="container px-4 mt-4">  
            <div class="row">
                <div class="col-lg-2 col-md-1 col-sm-1">
                    <img src="<?= base_url('assets/img/profile.png') ?>" class="elemen_1" alt="gallery">
                </div>
                <div class="col-lg-6 col-md-8 mx-2">
                    <h3 class="title">Hello, <?= $user['nama']; ?>!</h3>
                </div>
            </div>
            <div class="row box">
                <div class="col-lg-2">
                    <img src="<?= base_url('assets/img/profile/elemen1.png') ?>" class="elemen_2" alt="gallery">
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 mb-5">
                    <div class="card card-profile">
                        <div class="card-body">
                            <fieldset disabled="disabled">
                                <div class="mb-4">
                                    <label class="mb-2" for="nama">Nama</label>
                                    <input class="form-control" id="nama" name="nama" type="text" value="<?= $user['nama']; ?>">
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2" for="email">Email</label>
                                    <input class="form-control" id="email" name="email" type="text" value="<?= $user['email']; ?>">
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2" for="Phone">Nomor Telepon</label>
                                    <input class="form-control" id="phone" name="phone" type="text" value="<?= $user['phone']; ?>">
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="card card-layanan">
                        <div class="card-body">
                            <fieldset disabled="disabled">
                                <div class="mb-4">
                                    <label class="mb-2" for="Phone">Registrasi Layanan Publikasi</label>
                                    <input class="form-control" id="phone" name="phone" type="text" value="<?= $user['is_registered']; ?>">
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-2 hidden-md">
                        <img src="<?= base_url('assets/img/profile/elemen2.png') ?>" class="elemen_3" alt="gallery">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->section('custom_js') ?>
        <script src="<?= base_url('assets/js/user.js') ?>"></script>
    <?= $this->endSection('custom_js') ?>
    
<?= $this->endSection('content'); ?>
