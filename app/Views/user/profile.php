<?php
	$this->session = session();
    $success = $this->session->getFlashdata('success');
    
    if(!$this->session->level==2){
        echo "<script>history.go(-1);</script>";
        die(); 
    }
?>

<?= $this->extend('/layout/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/profile.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>

    <?php if ($this->session->get('success')) : ?>
        <div id="success" data-swal="<?= $this->session->get('success'); ?>"></div>
    <?php endif; ?>

    <div class="form-bg">
        <div class="container px-4 my-4">   
            <div class="row">
                <div class="col-xl-8 mx-auto my-4">
                    <div class="card xl-4">
                        <div class="text-center py-4">
                            <h3 class="mb-4">Data Pribadi</h3>
                        </div>
                        <div class="card-body mb-4">
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
            </div>
        </div>
    </div>

    <?= $this->section('custom_js') ?>
        <script src="<?= base_url('assets/js/user.js') ?>"></script>
    <?= $this->endSection('custom_js') ?>
    
<?= $this->endSection('content'); ?>
