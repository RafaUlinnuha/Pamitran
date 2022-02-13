<?php
	$this->session = session();
	$errors = $this->session->getFlashdata('errors');
?>

<?= $this->extend('/layout/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/edit_user.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>

    <div class="form-bg">
        <div class="container-xl px-4 mt-4">
            <div class="row">
                <div class="col-xl-8 mx-auto mt-4">
                    <div class="card xl-4">
                    <?php if (isset($validation)) : ?>
                        <div>
                            <div class="alert-danger">
                                <span class="errors"><?= $validation->listErrors() ?></span>
                            </div>
                        </div>
                    <?php endif; ?>
                        <div class="text-center pt-4">
                            <h1 class="mb-4">Edit Account</h1>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/update'); ?>" method="POST" class="form-container user" autocomplete="off">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="id" value="<?= $user->id; ?>">
                                <fieldset disabled="disabled">
                                    <div class="form-group mb-4">
                                        <label class="mb-2" for="id">ID User</label>
                                        <input class="form-control" id="id" name="id" type="text" value="<?= $user->id; ?>">
                                    </div>
                                </fieldset>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="nama">Name</label>
                                    <input class="form-control" id="nama" name="nama" type="text" value="<?= $user->nama; ?>">
                                    
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="email">Email</label>
                                    <input class="form-control" id="email" name="email" type="text" value="<?= $user->email; ?>">
                                   
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="phone">Nomor Telepon</label>
                                    <input class="form-control" id="phone" name="phone" type="text" value="<?= $user->phone; ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="role">Role</label><br>
                                    <?php 
                                        $role = [
                                            'admin' => 'Admin', 
                                            'user' => 'User'
                                        ];
                                        echo form_dropdown('role', $role, $user->role, 'class="form-select"'); 
                                    ?>                                    
                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'role') : '' ?></span>
                                </div>
                                <div class="form-group" style="float: right;">
                                    <a href="/admin/<?= $user->id; ?>" class="cancel"> Cancel</a>
                                    <button type="submit" class="btn btn-primary btn-user btn-block m-1">
                                        Ubah User
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