<?php
	$this->session = session();

    if(!$this->session->role=='user'){
        echo "<script>history.go(-1);</script>";
        die(); 
    }
    
	$not_unique = $this->session->getFlashdata('not_unique');
    $not_match = $this->session->getFlashdata('not_match');
?>

<?= $this->extend('/layout/base'); ?>

<?= $this->section('custom_css') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/profile.css') ?>">   
    <link rel="stylesheet" href="<?= base_url('assets/css/edit.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>
<div class="header"></div>

<div class="form-bg">
    <div class="container px-4">
        <div class="row">
            <div class="col-lg-2 col-md-1 col-sm-1">
                <img src="<?= base_url('assets/img/profile.png') ?>" class="elemen_1" alt="gallery">
            </div>
            <div class="col-lg-6 col-md-8 mx-2">
                <h3 class="title">Ubah Kata Sandi</h3>
            </div>
        </div>
        <div class="row box">
            <div class="col-lg-6 col-md-10 mx-auto">
                <div class="card card-profile">
                    <div class="card-body">
                        <form action="<?= base_url('change-password'); ?>" method="POST" class="form-container user" autocomplete="off">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="id" value="<?= $this->session->id; ?>">
                            <input type="hidden" name="password" value="<?= $this->session->password; ?>">
                            <div class="form-group mb-4">
                                <label class="mb-2" for="current_password">Kata Sandi Lama</label>
                                <input class="form-control" id="current_password" name="current_password" type="password" placeholder="Masukkan Kata Sandi Lama">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'current_password') : '' ?></span>
                                <span class="text-danger"><?= session()->get('not_match') ?></span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="mb-2" for="new_password">Kata Sandi Baru</label>
                                <input class="form-control" id="new_password" name="new_password" type="password"  placeholder="Masukkan Kata Sandi Baru">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'new_password') : '' ?></span>
                                <span class="text-danger"><?= session()->get('not_unique') ?></span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="mb-2" for="repeat_password">Konfirmasi Kata Sandi Baru</label>
                                <input class="form-control" id="repeat_password" name="repeat_password" type="password"  placeholder="Masukkan Ulang Kata Sandi Baru">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'repeat_password') : '' ?></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-user btn-block m-1">
                                    Ubah Kata Sandi
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>