<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="icon" href = "<?= base_url('assets/img/logo.png') ?>" type = "image/logo">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet"  type='text/css'>
    <script src="https://kit.fontawesome.com/98bcc9e905.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/navbar.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/base.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>">
    <?= $this->renderSection('custom_css'); ?>
    <title><?= $title; ?></title>
</head>

<body>
    <?= $this->include('/layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('/layout/footer'); ?>
    <script src="<?= base_url('assets/js/bootstrap.bundle.js') ?>"></script>
    <script src="<?= base_url('assets/js/sweetalert2.all.js') ?>"></script>
    <?= $this->renderSection('custom_js'); ?>
</body>

</html>