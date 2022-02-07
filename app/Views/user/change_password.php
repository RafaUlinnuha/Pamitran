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
    <div class="container-xl px-4 mt-4">
        <div class="row">
            <div class="col-xl-8 mx-auto mt-4">
                <div class="card xl-4">
                    <div class="text-center pt-4">
                        <h1 class="mb-4">Change Password</h1>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('ChangePassword/update'); ?>" method="POST" class="form-container user" autocomplete="off">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="id" value="<?= $user->id; ?>">
                            <input type="hidden" name="nama" value="<?= $user->nama; ?>">
                            <input type="hidden" name="email" value="<?= $user->email; ?>">

                            <div class="form-group mb-3">
                                <label class="small mb-1" for="current_password">Current Password</label>
                                <input class="form-control" id="current_password" name="current_password" type="password">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'current_password') : '' ?></span>
                            </div>
                            <div class="form-group mb-3">
                                <label class="small mb-1" for="new_password">New Password</label>
                                <input class="form-control" id="new_password" name="new_password" type="password">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'new_password') : '' ?></span>
                            </div>
                            <div class="form-group mb-3">
                                <label class="small mb-1" for="repeat_password">Repeat Password</label>
                                <input class="form-control" id="repeat_password" name="repeat_password" type="password">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'repeat_password') : '' ?></span>
                            </div>
                            <div class="form-group" style="float: right;">
                                <a href="/user"> Cancel</a>
                                <button type="submit" class="btn btn-primary btn-user btn-block m-1">
                                    Save
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