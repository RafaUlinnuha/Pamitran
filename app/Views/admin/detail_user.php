<?php

use CodeIgniter\I18n\Time;

$this->session = session();
?>

<?= $this->extend('/layout/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/detail_user.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>
    <div class="container-xl px-4 mt-4">   
        <div class="row">
            <div class="col-xl-8 mx-auto mt-4">
                <div class="card xl-4">
                    <div class="text-center pt-4">
                        <h1 class="mb-4">Account Details</h1>
                    </div>
                    <div class="card-body">
                        <fieldset disabled="disabled">
                            <div class="mb-3">
                                <label class="small mb-1" for="id">Account ID</label>
                                <input class="form-control" id="id" name="id" type="text" value="<?= $user->id; ?>">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="nama">Full name</label>
                                <input class="form-control" id="nama" name="nama" type="text" value="<?= $user->nama; ?>">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="email">Email address</label>
                                <input class="form-control" id="email" name="email" type="text" value="<?= $user->email; ?>">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="Phone">Phone number</label>
                                <input class="form-control" id="phone" name="phone" type="text" value="<?= $user->phone; ?>">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="Phone">Member since</label>
                                <input class="form-control" id="phone" name="phone" type="text" value="<?= Time::parse($user->created_at)->toDateString(); ?>">
                            </div>
                        </fieldset>
                            <button class="btn btn-warning m-1 text-white" onclick="location.href='/admin'" type="button"> Back to Manage User</button>
                            <button class="btn btn-primary m-1" onclick="location.href='/admin/edit/<?= $user->id; ?>'" type="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Account</button>
                        <form action="/admin/<?= $user->id; ?>" method="POST" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger m-1" onclick="return confirm('Are you sure?');" type="submit"><i class="fa fa-trash" aria-hidden="true"></i> Delete Account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection('content'); ?>
