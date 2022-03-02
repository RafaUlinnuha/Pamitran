<?php
	$this->session = session();

    if(!$this->session->role=='user'){
        echo "<script>history.go(-1);</script>";
        die(); 
    }
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
                <h3 class="title">Ubah Profil</h3>
            </div>
        </div>
        <div class="row box">
            <!-- <div class="col-md-1">
                <img src="<?= base_url('assets/img/profile/elemen1.png') ?>" class="elemen_5" alt="gallery">
            </div> -->
            <div class="col-lg-6 col-md-10 mx-auto">
                <div class="card card-profile">
                    <div class="card-body">
                        <form action="<?= base_url('edit'); ?>" method="POST" class="form-container user" autocomplete="off">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="id" value="<?= $this->session->id; ?>">
                            <div class="form-group mb-4">
                                <label class="mb-2" for="nama">Nama</label>
                                <input class="form-control" id="nama" name="nama" type="text" value="<?= set_value('nama') ? set_value('nama') : $this->session->nama; ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'nama') : '' ?></span>
                                
                            </div>
                            <div class="form-group mb-4">
                                <label class="mb-2" for="email">Email</label>
                                <input class="form-control" id="email" name="email" type="text" value="<?= set_value('email') ? set_value('email') : $this->session->email; ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="mb-2" for="Phone">Nomor Telepon</label>
                                <input class="form-control" id="phone" name="phone" type="text" value="<?= set_value('phone') ? set_value('phone') : $this->session->phone; ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'phone') : '' ?></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-user btn-block m-1">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-2 hidden-edit">
                <img src="<?= base_url('assets/img/profile/elemen2.png') ?>" class="elemen_6" alt="gallery">
            </div> -->
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>