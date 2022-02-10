<?= $this->extend('/layout/base'); ?>>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>

<body class="bg-gradient-primary">
    <div class="container my-4">
        <div class="row">
            <div class="col-xl-5 col-lg-7 col-md-9 mx-auto my-4">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="mb-5">Register</h1>
                                </div>
                                <div class="form-group p-2">
                                    <form action="<?= base_url('/register'); ?>" method="POST" class="user" autocomplete="off">
                                        <?= csrf_field(); ?>
                                        <div class="form-group p-2">
                                            <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?=set_value('nama')?>">
                                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'nama') : '' ?></span>
                                        </div>
                                        <div class="form-group p-2">
                                            <input type="text" class="form-control form-control-user" name="email" id="email" aria-describedby="emailHelp" placeholder="Email" value="<?=set_value('email')?>">
                                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                                        </div>
                                        <div class="form-group p-2">
                                            <input type="text" class="form-control form-control-user" id="phone" name="phone" placeholder="Nomor Telepon" value="<?=set_value('phone')?>">
                                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'phone') : '' ?></span>
                                        </div>
                                        <div class="form-group p-2">
                                            <input type="password" class="form-control form-control-user" placeholder="Kata Sandi" id="password" name="password">
                                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                                        </div>
                                        <div class="form-group p-2">
                                            <input type="password" class="form-control form-control-user" placeholder="Konfirmasi Kata Sandi" id="password_confirm" name="password_confirm">
                                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password_confirm') : '' ?></span>
                                        </div>
                                        <br>
                                        <div class="text-center mt-4">
                                            <button type="submit"  class="btn btn-primary btn-user btn-block">
                                                Register
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <br>
                                <div class="small text-center pt-3">
                                    Sudah punya akun? Silakan <a href="/login">login</a>.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?= $this->endSection('content'); ?>