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

    <?php if ($this->session->get('errors')) : ?>
        <div id="errors" data-swal="<?= $this->session->get('errors'); ?>"></div>
    <?php endif; ?>

    <div class="form-bg">
        <div class="container-xl px-4 mt-4">   
            <div class="row">
                <div class="col-xl-8 mx-auto mt-4">
                    <div class="card xl-4">
                        <div class="text-center pt-4">
                            <h1 class="mb-4">Account Details</h1>
                        </div>
                        <div class="card-body">
                            <fieldset disabled="disabled">
                                <div class="mb-4">
                                    <label class="mb-2" for="nama">Full name</label>
                                    <input class="form-control" id="nama" name="nama" type="text" value="<?= $user['nama']; ?>">
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2" for="email">Email address</label>
                                    <input class="form-control" id="email" name="email" type="text" value="<?= $user['email']; ?>">
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2" for="Phone">Phone number</label>
                                    <input class="form-control" id="phone" name="phone" type="text" value="<?= $user['phone']; ?>">
                                </div>
                            </fieldset>
                            <button class="btn btn-primary" type="submit" value="<?= $user['id']; ?>" onclick="location.href='/edit';"> Edit Account</button>
                            <form action="/change_password" method="post" class="d-inline p-1">
                                <input type="hidden" name="id" id="id" class="form-control" value="<?= $user['id']; ?>">
                                <button class="btn btn-primary" type="submit"> Change Password</button>
                            </form>
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
