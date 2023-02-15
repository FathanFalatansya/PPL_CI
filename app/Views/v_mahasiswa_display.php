<?= $this->extend('layouts/v_Template'); ?>
<?= $this->section('content'); ?>


    <h1>Data Mahasiswa</h1>
        <form action="<?= base_url('/Mahasiswa') ?>" method="get">
            <input type="search" name="keyword" placeholder="Masukkan Nama Mahasiswa" autofocus>
            <button type="submit">Cari</button>
        </form>
    <table border=15>
        <thead>
            <tr>
                
                <th>Nim</th> 
                <th>Nama</th>
                <th>Umur</th>
                <th>Detail</th>
               
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $mhs): ?>
            <tr>
                <td><?= $mhs['Nim']; ?></td>
                <td><?= $mhs['Nama']; ?></td>
                <td><?= $mhs['Umur']; ?></td>
                <td><a href="/Mahasiswa/Detail/<?= $mhs['Nim'] ?>">Detail</a></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </br>
    
    <a href="/Mahasiswa/Create"><button type="button">Tambah Data</button></a>

    </br>
    </br>

    <a href="/"><button type="button">Kembali Ke Home</button></a>
    <?= $this->endsection(); ?>
