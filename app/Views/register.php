<?= $this->extend('/base'); ?>>

<?= $this->section('content'); ?>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="mb-5">Register</h1>
                                    </div>
                                    <div class="form-group p-2">
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
                                    </div>
                                    <form action="<?= base_url('/register'); ?>" method="POST" class="user">
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
                                            <input type="password" class="form-control form-control-user" autocomplete="off" placeholder="Password" id="password" name="password">
                                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                                        </div>
                                        <div class="form-group p-2">
                                            <input type="password" class="form-control form-control-user" placeholder="Konfirmasi Password" autocomplete="off" id="password_confirm" name="password_confirm">
                                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password_confirm') : '' ?></span>
                                        </div>
                                        <br>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Register
                                            </button>
                                        </div>
                                    </form>
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
    </div>
</body>

<?= $this->endSection('content'); ?>