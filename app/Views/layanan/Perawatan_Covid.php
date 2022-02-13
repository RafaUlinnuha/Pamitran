<?= $this->extend('/layout/base'); ?>

<?= $this->section('custom_css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/layanan.css') ?>">
<?= $this->endSection('custom_css') ?>

<?= $this->section('content'); ?>
    
    <section class="about p-5 mt-5">
        <div class="container p-5">
            <h1>Perawatan Covid</h1>
            <div class="row pt-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita aliquid dolorum similique! Debitis quas modi mollitia sequi? Vitae quae provident nulla itaque at neque commodi soluta! Explicabo eius excepturi ratione. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos doloribus commodi voluptate, ab illum obcaecati necessitatibus sunt praesentium assumenda qui quo temporibus minus magnam deleniti quibusdam velit, tenetur possimus? Autem?</p>
            </div>
        </div>
    </section>

<?= $this->endSection('content'); ?>