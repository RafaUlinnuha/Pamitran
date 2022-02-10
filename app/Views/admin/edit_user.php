<?php
	$this->session = session();
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
                        <div class="text-center pt-4">
                            <h1 class="mb-4">Edit Account</h1>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/update'); ?>" method="POST" class="form-container user" autocomplete="off">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="id" value="<?= $user->id; ?>">
                                <fieldset disabled="disabled">
                                    <div class="form-group mb-4">
                                        <label class="mb-2" for="id">Account ID</label>
                                        <input class="form-control" id="id" name="id" type="text" value="<?= $user->id; ?>">
                                    </div>
                                </fieldset>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="nama">Full name</label>
                                    <input class="form-control" id="nama" name="nama" type="text" value="<?= $user->nama; ?>">
                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'nama') : '' ?></span>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="email">Email address</label>
                                    <input class="form-control" id="email" name="email" type="text" value="<?= $user->email; ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="Phone">Phone number</label>
                                    <input class="form-control" id="phone" name="phone" type="text" value="<?= $user->phone; ?>">
                                </div>
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Update
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