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
                            <h1 class="mb-4">Detail Layanan Publikasi</h1>
                        </div>
                        <div class="card-body">
                                <input type="hidden" name="id" value="<?= $results['id']; ?>">
                                <fieldset disabled="disabled">
                                    <div class="form-group mb-4">
                                        <label class="mb-2" for="id">ID User</label>
                                        <input class="form-control" id="id" name="id" type="text" value="<?= $results['id']; ?>">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="mb-2" for="nama">Name</label>
                                        <input class="form-control" id="nama" name="nama" type="text" value="<?= $results['nama']; ?>">
                                        
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="mb-2" for="email">Email</label>
                                        <input class="form-control" id="email" name="email" type="text" value="<?= $results['email']; ?>">
                                    
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="mb-2" for="phone">Nomor Telepon</label>
                                        <input class="form-control" id="phone" name="phone" type="text" value="<?= $results['phone']; ?>">
                                    </div>
                                </fieldset>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="jenis_layanan">Jenis Layanan</label>
                                    <div class="form-control"><?=  $results['jenis_layanan']; ?></div>
                                </div>      
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="bukti_transfer">Bukti Transfer</label>
                                    <img class="form-control mt-1" src="/assets/img/bukti_transfer/<?= $results['bukti_transfer']; ?>">
                                    <div class="input-group">
                                        <span class="form-control mt-2"><?= $results['bukti_transfer']; ?></span>
                                        <button class="btn btn-outline-success" type="button" onclick="location.href='/admin/download-bukti-transfer/<?= $results['id_layanan']; ?>'">Download</button>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="metode_konsultasi">Metode Konsultasi</label>
                                    <div class="form-control"><?= $results['metode_konsultasi']; ?></div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="paper">Paper</label>
                                    <div class="input-group">
                                        <span class="form-control mt-2"><?= $results['paper']; ?></span>
                                        <button class="btn btn-outline-success" type="button" onclick="location.href='/admin/download-paper/<?= $results['id_layanan']; ?>'">Download</button>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="layanan_publikasi">Registrasi Layanan Publikasi</label>
                                    <div class="input-group">
                                        <span class="form-control mt-2"><?= $results['is_registered']; ?></span>
                                        <button class="btn btn-outline-primary" type="button" onclick="location.href='/admin/edit-status/<?= $results['id']; ?>'">Edit</button>
                                    </div>
                                </div>

                            <button class="btn btn-warning m-1 text-white" onclick="location.href='/admin'" type="button"> Kembali ke Kelola User</button>
                            <a href="/admin/delete-layanan/<?= $results['id_layanan']; ?>">
                                <button class="btn btn-danger m-1" onclick="return confirm('Are you sure?');" type="submit"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection('content'); ?>