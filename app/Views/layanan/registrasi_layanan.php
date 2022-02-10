<?php
	$this->session = session();

    if(!$this->session->level==2){
        echo "<script>history.go(-1);</script>";
        die(); 
    }
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
                        <h3 class="mb-4">Registrasi Layanan</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('edit'); ?>" method="POST" class="form-container user" autocomplete="off" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="id" value="<?= $this->session->id; ?>">
                            <fieldset disabled="disabled">
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="nama">Nama</label>
                                    <input class="form-control" id="nama" name="nama" type="text" value="<?= $user['nama']; ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="email">Email</label>
                                    <input class="form-control" id="email" name="email" type="text" value="<?= $user['email']; ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="phone">Nomor Telepon</label>
                                    <input class="form-control" id="phone" name="phone" type="text" value="<?= $user['phone']; ?>">
                                </div>
                            </fieldset>
                            <div class="form-group mb-4">
                                <label class="mb-2" for="paper">Tambah Paper</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="paper" name="paper">
                                </div>
                            </div>
                            <div class="form-group d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Registrasi Layanan
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