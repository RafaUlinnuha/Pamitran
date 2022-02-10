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
                    <div class="card-body">
                        <div class="row">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="mb-5">Login</h1>
                                </div>
                                <div class="form-group p-2">
                                    <div id="swal" data-swal="<?= session()->get('success'); ?>"></div>
                                    <form action="<?= base_url('/login'); ?>" method="POST" class="user" autocomplete="off">
                                        <?= csrf_field(); ?>
                                        <div class="form-group p-2">
                                            <input type="text" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" value="<?=set_value('email')?>">
                                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                                        </div>

                                        <div class="form-group p-2">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Kata Sandi">
                                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                                        </div>
                                        <br>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Login
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <br>
                                <div class="small text-center pt-3">
                                    Belum punya akun? Silakan <a href="/register">register</a> terlebih dahulu.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?= $this->section('custom_js') ?>
    <script src="<?= base_url('assets/js/register.js') ?>"></script>
<?= $this->endSection('custom_js') ?>

<?= $this->endSection('content'); ?>