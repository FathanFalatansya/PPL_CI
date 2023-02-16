<?= $this->extend('layouts/v_Template'); ?>
<?= $this->section('content'); ?>

<h1>Detail Data Pegawai</h1>

    <table>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?= $pegawai['Nim'] ?></td>  
        </tr>

        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $pegawai['Nama'] ?></td>
        </tr>

        <tr>
            <td>Gender</td>
            <td>:</td>
            <td><?= $pegawai['Gender'] ?></td>
        </tr>

        <tr>
            <td>Telp</td>
            <td>:</td>
            <td><?= $pegawai['Telp'] ?></td>
        </tr>

        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?= $pegawai['Email'] ?></td>
        </tr>

        <tr>
            <td>Pendidikan</td>
            <td>:</td>
            <td><?= $pegawai['Pendidikan'] ?></td>
        </tr>
    </table>
    </br>
    <a href="/Pegawai"><button type="button">Kembali</button></a> &nbsp;&nbsp;
    <a href="/Pegawai/Edit/<?= $pegawai['Nim'] ?>"><button type="button">Edit</button></a>

<?= $this->endsection(); ?>

