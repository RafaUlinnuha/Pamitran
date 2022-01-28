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
                                    <form action="/login" method="post" class="user">
                                        <div class="form-group p-2">
                                            <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= old('email') ?>" required>
                                        </div>
                                        <div class="form-group p-2">
                                            <input type="email" class="form-control form-control-user" name="email" id="email" aria-describedby="emailHelp" placeholder="Email" value="<?= old('email') ?>" required>
                                        </div>
                                        <div class="form-group p-2">
                                            <input type="text" class="form-control form-control-user" id="phone" name="phone" placeholder="Nomor Telepon" value="<?= old('email') ?>" required>
                                        </div>
                                        <div class="form-group p-2">
                                            <input type="password" class="form-control form-control-user" autocomplete="off" placeholder="Password" id="password" name="password" required>
                                        </div>
                                        <div class="form-group p-2">
                                            <input type="password" class="form-control form-control-user" placeholder="Konfirmasi Password" autocomplete="off" id="confirm_password" name="confirm_password" required>
                                        </div>
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