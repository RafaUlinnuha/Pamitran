<?= $this->extend('/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/layanan.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>
    <header class="title">
        <h1>Lima</h1>
    </header>

<?= $this->endSection('content'); ?>