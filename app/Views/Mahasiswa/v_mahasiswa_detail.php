<?= $this->extend('layouts/v_Template'); ?>
<?= $this->section('content'); ?>

<h2>Detail Data Mahasiswa</h2>
</br>
    <ul>
        <li>NIM : <?= $mahasiswa['Nim'] ?> </li>
        <li>Nama : <?= $mahasiswa['Nama'] ?></li>
        <li>Umur : <?= $mahasiswa['Umur'] ?> </li>
    </ul>

    <a href="/Mahasiswa"><button type="button">Kembali</button></a>

<?= $this->endsection(); ?>