<?= $this->extend('layouts/v_Template'); ?>
<?= $this->section('content'); ?>

<h1>Edit Data Mahasiswa</h1>
    
    <form action="/Mahasiswa/Update/<?= $mahasiswa['Nim'] ?>" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="Nim" value="<?= $mahasiswa['Nim'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="Nama" value="<?= $mahasiswa['Nama'] ?>"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td><input type="text" name="Umur" value="<?= $mahasiswa['Umur'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </table>

<?= $this->endsection(); ?>