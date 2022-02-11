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
            <h1>Layanan Publikasi</h1>
        </header>

        <?php if ($this->session->get('success')) : ?>
            <div id="success" data-swal="<?= $this->session->get('success'); ?>"></div>
        <?php endif; ?>

        <div class="row">
            <div class="table-responsive">
                <table id="user" class="table table-striped table-bordered table-hover col text-center mt-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Layanan</th>
                            <th>Bukti Transfer</th>
                            <th>Metode Konsultasi</th>
                            <th>Paper</th>
                            <th>Registrasi Layanan Publikasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($results as $result) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td style="text-align: left;"><?= $result['nama']; ?></td>
                                <td style="text-align: left;"><?= $result['jenis_layanan']; ?></td>
                                <td style="text-align: left;"><?= $result['bukti_transfer']; ?></td>
                                <td style="text-align: left;"><?= $result['metode_konsultasi']; ?></td>
                                <td style="text-align: left;"><?= $result['is_registered']; ?></td>
                                <td style="text-align: left;"><?= $result['paper']; ?></td>
                                <td><button class="btn btn-success" onclick="location.href='/detail_layanan/<?= $result['id_layanan']; ?>';" type="button">Detail</button></td>
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