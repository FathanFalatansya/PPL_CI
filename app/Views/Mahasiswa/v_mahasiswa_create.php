<?= $this->extend('layouts/v_Template'); ?>
<?= $this->section('content'); ?>

    <h2>Tambah Data Mahasiswa</h2>
            <section id="form-mahasiswa-store">
            <?php
            if (isset($errors)) {
                echo '<div style="width: 300px"; border-radius: 5px; >';
                echo '<ul style="background-color: red; color: white; padding: 10px;">';
                foreach ($errors as $error) {
                    echo "<li>$error</li>";
                }   
                echo '</ul>';
                echo '</div>';
            }
            ?>
            <form action="/Mahasiswa/Store" method="POST">
            <div>
                <label for="Nim">NIM</label> <br>
                <input type="number" name="Nim" id="Nim" value="<?= set_value('Nim') ?>">
            </div>
            <div>
                <label for="Nama">Nama Mahasiswa</label> <br>
                <input type="text" name="Nama" id="Nama" value="<?= set_value('Nama') ?>">
            </div>
            <div>
                <label for="Umur">Umur</label> <br>
                <input type="number" name="Umur" id="Umur" value="<?= set_value('Umur') ?>">
            </div>
            <div>
                <a href="/Mahasiswa">&laquo; Kembali</a>
                <input type="submit" name="simpan" value="Simpan">
            </div>
            </form>
        </section>
<?= $this->endsection(); ?>