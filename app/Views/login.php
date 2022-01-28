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
                                        <h1 class="mb-5">Login</h1>
                                    </div>
                                    <form action="/" method="post" class="user">
                                        <div class="form-group p-2">
                                            <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
                                        </div>

                                        <div class="form-group p-2">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                            </div>

                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                        </div>
                                    </form>
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
    </div>
</body>

<?= $this->endSection('content'); ?>