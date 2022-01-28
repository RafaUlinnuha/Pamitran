<?php
	$session = session();
	$errors = $session->getFlashdata('errors');
	$success = $session->getFlashdata('success');
?>

<?= $this->extend('/base'); ?>

<?= $this->section('content'); ?>
    <?php if($session->level==1) { ?>
        <header class="title">
            <h1>Edit Pengguna</h1>
        </header>
        <div class="input-form">
            <?php if (isset($validation)) : ?>
                <div>
                    <div class="alert-danger">
                        <span class="error"><?= $validation->listErrors() ?></span>
                    </div>
                </div>
            <?php endif; ?>
            <?php echo form_open_multipart('admin/update_user'); ?>
                <input type="hidden" name="id" value="<?= $users->id; ?>">
                <div>
                    <label for="nama">Nama</label><br>
                    <input type="text" name="nama" id="nama" required autocomplete="off" value="<?= $menu->nama; ?>">
                </div>
                <div>
                    <label>Jenis</label>
                    <?php 
                        $jenis = [
                            'Makanan' => 'Makanan', 
                            'Minuman' => 'Minuman'
                        ];
                        echo form_dropdown('jenis', $jenis, $menu->jenis); 
                    ?>
                </div>
                <div>
                    <label for="deskripsi">Deskripsi</label><br>
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="5"><?= $menu->deskripsi; ?></textarea><br>
                </div>
                <div>
                    <label for="harga">Harga</label><br>
                    <input type="text" name="harga" id="harga" required autocomplete="off" value="<?= $menu->harga; ?>">
                </div>
                <div>
                    <label for="gambar">Gambar</label><br>
                    <input type="file" name="gambar">
                </div>
                <div>
                    <button type="submit" class="button">UPDATE</button>
                </div>
            <?php echo form_close(); ?>
        </div>
        <?php 
            } else { 
                echo "<script>alert('Maaf Pengguna Harus Admin');history.go(-1);</script>";
                die(); 
            }
        ?>
<?= $this->endSection('content'); ?>