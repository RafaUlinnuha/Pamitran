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
    <link rel="stylesheet" href="<?= base_url('assets/css/edit.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>
<div class="form-bg">
    <div class="container px-4 my-4">
        <div class="row">
            <div class="col-xl-8 mx-auto my-4">
                <div class="card xl-4">
                    <div class="text-center py-4">
                        <h3 class="mb-4">Ubah Kata Sandi</h3>
                    </div>
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
                            <div class="form-group" style="float: right;">
                                <a href="/user" class="cancel"> Cancel</a>
                                <button type="submit" class="btn btn-primary btn-user btn-block m-1">
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