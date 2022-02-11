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
                            <fieldset disabled="disabled">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="id" value="<?= $results->id; ?>">
                                <fieldset disabled="disabled">
                                    <div class="form-group mb-4">
                                        <label class="mb-2" for="id">ID User</label>
                                        <input class="form-control" id="id" name="id" type="text" value="<?= $results->id; ?>">
                                    </div>
                                </fieldset>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="nama">Name</label>
                                    <input class="form-control" id="nama" name="nama" type="text" value="<?= $results->nama; ?>">
                                    
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="email">Email</label>
                                    <input class="form-control" id="email" name="email" type="text" value="<?= $results->email; ?>">
                                   
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="phone">Nomor Telepon</label>
                                    <input class="form-control" id="phone" name="phone" type="text" value="<?= $results->phone; ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="nama">Jenis Layanan</label>
                                    <input class="form-control" id="nama" name="nama" type="text" value="<?= $results->jenis_layanan; ?>">
                                </div>        
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="email">Bukti Transfer</label>
                                    <br><img src="assets/img/bukti_transfer/<?= $results->bukti_transfer; ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="phone">Metode Konsultasi</label>
                                    <input class="form-control" id="phone" name="phone" type="text" value="<?= $results->metode_konsultasi; ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="phone">Paper</label>
                                    <br><img src="assets/img/bukti_transfer/<?= $results->bukti_transfer; ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="layanan_publikasi">Registrasi Layanan Publikasi</label><br>
                                    <?php 
                                        $is_registered = [
                                            'Belum Teregristrasi' => 'Belum Teregristrasi', 
                                            'Sedang Dalam Proses Verifikasi' => 'Sedang Dalam Proses Verifikasi', 
                                            'Sudah Teregristrasi' => 'Sudah Teregristrasi',
                                        ];
                                        echo form_dropdown('is_registered', $is_registered, $results->is_registered, 'class="form-select"'); 
                                    ?>                                    
                                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'role') : '' ?></span>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection('content'); ?>