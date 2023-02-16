<?= $this->extend('layouts/v_Template'); ?>
<?= $this->section('content'); ?>

<h2>Detail Data Mahasiswa</h2>
</br>
    <table>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?= $mahasiswa['Nim'] ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $mahasiswa['Nama'] ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td><?= $mahasiswa['Umur'] ?></td>
        </tr>
        
    </table>
    </br>
    <a href="/Mahasiswa"><button type="button">Kembali</button></a> &nbsp;&nbsp;
    <a href="/Mahasiswa/Edit/<?= $mahasiswa['Nim'] ?>"><button type="button">Edit</button></a>
    

<?= $this->endsection(); ?>