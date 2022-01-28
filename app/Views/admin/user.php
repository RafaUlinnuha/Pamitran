<?php
	$session = session();
	$errors = $session->getFlashdata('errors');
	$success = $session->getFlashdata('success');
?>

<?= $this->extend('/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/user.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>
    <header class="title">
        <h1>Daftar User</h1>
    </header>
    <div class="container mt-3">
        <?php if(session()->get('success')) : ?>
            <div class="col-12">
                <div class="alert alert-success" role="alert">
                    <?= session()->get('success') ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (session()->get('errors')) : ?>
            <div class="col-12">
                <div class="alert alert-danger" role="alert">
                    <?= session()->get('errors') ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="table-responsive">
            <table id="user" class="table table-striped table-bordered text-center mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($results as $result) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td style="text-align: left;"><?= $result['id']; ?></td>
                            <td style="text-align: left;"><?= $result['nama']; ?></td>
                            <td style="text-align: left;"><?= $result['email']; ?></td>
                            <td style="text-align: left;"><?= $result['phone']; ?></td>
                            <td><a href="/user/edit/<?= $result['id']; ?>" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                            <td><a href="/user/delete/<?= $result['id']; ?>" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php 
        if(!$session==1){
            echo "<script>alert('Maaf Pengguna Harus Admin');history.go(-1);</script>";
            die(); 
        }
    ?>
<?= $this->endSection('content'); ?>