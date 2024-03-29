<?php
	$this->session = session();
    $success = $this->session->getFlashdata('success');
?>

<?= $this->extend('/layout/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/user.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>

    <div class="container mt-5">
        <header class="title mt-2">
            <h1>Kelola User</h1>
        </header>

        <?php if ($this->session->get('success')) : ?>
            <div id="success" data-swal="<?= $this->session->get('success'); ?>"></div>
        <?php endif; ?>

        <div class="row">
            <div class="table-responsive">
                <table id="user" class="table table-striped table-bordered table-hover text-center mt-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($user as $result) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td style="text-align: left;"><?= $result['nama']; ?></td>
                                <td style="text-align: left;"><?= $result['email']; ?></td>
                                <td style="text-align: left;"><?= $result['role']; ?></td>
                                <td><button class="btn btn-success" onclick="location.href='/admin/<?= $result['id']; ?>';" type="button"> Detail</button></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?= $this->section('custom_js') ?>
        <script src="<?= base_url('assets/js/user.js') ?>"></script>
    <?= $this->endSection('custom_js') ?>

<?= $this->endSection('content'); ?>