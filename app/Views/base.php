<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    <link rel="stylesheet" href="<?= base_url('assets/css/navbar.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/base.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>">
    <?= $this->renderSection('custom_css'); ?>
    <title>Pamitran</title>
</head>

<body>
    <?= $this->include('/navbar'); ?>
        <?= $this->renderSection('content'); ?>
    <?= $this->include('/footer'); ?>
    <script src="<?= base_url('assets/js/bootstrap.bundle.js') ?>"></script>
</body>

</html>