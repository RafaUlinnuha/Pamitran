<?php
	$this->session = session();

    $success = $this->session->getFlashdata('success');
    
    if(!$this->session->role=='user'){
        echo "<script>history.go(-1);</script>";
        die(); 
    }
?>

<?= $this->extend('/layout/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/edit.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>

    <?php if ($this->session->get('success')) : ?>
        <div id="success" data-swal="<?= $this->session->get('success'); ?>"></div>
    <?php endif; ?>

<div class="form-bg">
    <div class="container px-4 my-4">
        <div class="row">
            <div class="col-xl-8 mx-auto my-4">
                <div class="card xl-4">
                    <div class="text-center py-4">
                        <h3 class="mb-4">Layanan Publikasi</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('registrasi-layanan'); ?>" method="POST" class="form-container user" autocomplete="off" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="id" value="<?= $this->session->id; ?>">
                            <fieldset disabled="disabled">
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="nama" style="font-weight: bold;">Nama</label>
                                    <input class="form-control" id="nama" name="nama" type="text" value="<?= $this->session->nama; ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="email" style="font-weight: bold;">Email</label>
                                    <input class="form-control" id="email" name="email" type="text" value="<?= $this->session->email; ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2" for="phone" style="font-weight: bold;">Nomor Telepon</label>
                                    <input class="form-control" id="phone" name="phone" type="text" value="<?= $this->session->phone; ?>">
                                </div>
                            </fieldset>
                            <div class="form-group row mb-4 mt-3">
                                <label class="mb-2 text-center" for="jenis_layanan" style="font-weight: bold;">Pilih Layanan</label>
                                <div class="col-sm-6 mt-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="jenis_layanan[]" id="jenis_layanan" value="Konsultasi Pemilihan Jurnal Scopus / WoS">
                                        <label class="form-check-label">
                                        Konsultasi Pemilihan Jurnal Scopus / WoS 
                                        <br>(Rp 250.000/kali)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="jenis_layanan[]" id="jenis_layanan" value="Konsultasi Penulisan Artikel Ilmiah">
                                        <label class="form-check-label">
                                        Konsultasi Penulisan Artikel Ilmiah
                                        <br>(Rp 250.000/kali)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="jenis_layanan[]" id="jenis_layanan" value="Layouting Artikel sesuai jurnal">
                                        <label class="form-check-label">
                                        Layouting Artikel sesuai jurnal
                                        <br>(Rp 200.000/kali)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="jenis_layanan[]" id="jenis_layanan" value="Proofread dengan Proofers.co.uk">
                                        <label class="form-check-label">
                                        Proofread dengan Proofers.co.uk
                                        <br>(Rp 350.000/1000 kata)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="jenis_layanan[]" id="jenis_layanan" value="Proses pendampingan publikasi (submission, revisi, korespondensi)">
                                        <label class="form-check-label">
                                        Proses pendampingan publikasi (submission, revisi, korespondensi) 
                                        <br>(Rp 2.000.000/kali)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="jenis_layanan[]" id="jenis_layanan" value="Cek plagiarism">
                                        <label class="form-check-label">
                                        Cek plagiarism
                                        <br>(Rp 150.000/kali)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="jenis_layanan[]" id="jenis_layanan" value="Perbaikan revisi manuscript">
                                        <label class="form-check-label">
                                        Perbaikan revisi manuscript
                                        <br>(Rp 1.000.000/kali)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="jenis_layanan[]" id="jenis_layanan" value="Referencing style (mendeley)">
                                        <label class="form-check-label">
                                        Referencing style (mendeley) 
                                        <br>(Rp 250.000/kali)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="jenis_layanan[]" id="jenis_layanan" value="Translate artikel">
                                        <label class="form-check-label">
                                        Translate artikel
                                        <br>(Rp 200.000/1000 kata)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="jenis_layanan[]" id="jenis_layanan" value="Penulisan manuscript ilmiah (abstract, latar belakang, metode, hasil, diskusi, kesimpulan)">
                                        <label class="form-check-label">
                                        Penulisan manuscript ilmiah (abstract, latar belakang, metode, hasil, diskusi, kesimpulan) 
                                        <br>(Rp 2.500.000/paket)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    Paket Lengkap Publikasi SCOPUS/WoS Q1-Q4 dan SINTA   : Kontak WA Pamitran (082116611339)
                                </div>
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'jenis_layanan') : '' ?></span>
                            </div>
                            <div class="form-group mb-4">
                                <label class="mb-2" for="email" style="font-weight: bold;">Transfer Fee</label>
                                <br>Rekening PAMITRAN UP : Bank BNI 9880619020200217
                            </div>
                        
                            <div class="form-group mb-4">
                                <label class="mb-2" for="bukti_transfer" style="font-weight: bold;">Upload Bukti Transfer</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="bukti_transfer" name="bukti_transfer">
                                </div>
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'bukti_transfer') : '' ?></span>
                            </div>

                            <div class="form-group mb-4">
                                <label class="mb-2" for="metode_konsultasi" style="font-weight: bold;">Metode Konsultasi</label><br>
                                <?php 
                                    $metode_konsultasi = [
                                        'Online' => 'Online', 
                                        'Offline' => 'Offline'
                                    ];
                                    echo form_dropdown('metode_konsultasi', $metode_konsultasi, 'online', 'class="form-select"'); 
                                ?>                                    
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'metode_konsultasi') : '' ?></span>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="mb-2 text-center" for="email" style="font-weight: bold;">Jadwal Layanan</label>
                                <img src="<?= base_url('assets/img/jadwal_layanan.jpeg') ?>">
                            </div>

                            <div class="form-group mb-4">
                                <label class="mb-2" for="paper" style="font-weight: bold;">Upload Paper</label><span>    (File dalam bentuk Pdf)</span>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="paper" name="paper">
                                </div>
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'paper') : '' ?></span>
                            </div>

                            <div class="form-group d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <?= $this->section('custom_js') ?>
        <script src="<?= base_url('assets/js/registrasi_layanan.js') ?>"></script>
    <?= $this->endSection('custom_js') ?>

<?= $this->endSection('content'); ?>