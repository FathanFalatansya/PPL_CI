<?= $this->extend('layouts/v_Template'); ?>
<?= $this->section('content'); ?>

<h1>Edit Data Mahasiswa</h1>
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
    <form action="/Mahasiswa/Update/<?= $mahasiswa['Nim'] ?>" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="Nim" value="<?= $mahasiswa['Nim'] ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <?= csrf_field(); ?>
                <td><input type="text" name="Nama" value="<?= $mahasiswa['Nama'] ?>"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <?= csrf_field(); ?>
                <td><input type="text" name="Umur" value="<?= $mahasiswa['Umur'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit">Simpan</button>
                <a href="/Mahasiswa"><button type="button">Kembali</button></a></td>
                
            </tr>
        </table>

<?= $this->endsection(); ?>