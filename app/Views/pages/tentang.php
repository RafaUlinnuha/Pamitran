<?= $this->extend('/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/tentang.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>
    <header class="title">
        <h1>Tentang Kami</h1>
    </header>

<?= $this->endSection('content'); ?>