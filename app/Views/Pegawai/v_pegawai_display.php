<?= $this->extend('layouts/v_Template'); ?>
<?= $this->section('content'); ?>

    <h1>Data Pegawai</h1>
        <form action="<?= base_url('/Pegawai') ?>" method="get">
            <input type="search" name="keyword" placeholder="Masukkan Nama Pegawai" autofocus>
            <button type="submit">Cari</button>
        </form>

    <br/>
        <?php if (isset($nodata)): ?>
                <div style="background-color: red; color: white; padding: 10px; width: 220px; margin-bottom: 10px; border-radius: 5%;">
                    <?= $nodata ?>
                </div>
        <?php else: ?>
    <table border=15>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Telp</th>
                <th>Email</th>
                <th>Pendidikan</th>
                <th>Aksi</th>
            </tr>
        </thead>

            <?php if (isset($notfound)): ?>
                <div style="background-color: red; color: white; padding: 10px; width: 220px; margin-bottom: 10px; border-radius: 5%;">
                    <?= $notfound ?>
                </div>
            <?php else: ?>
                <tbody>
                    <?php foreach ($pegawai as $pgw): ?>
                        <tr>
                            <td><?= $pgw['Nim']; ?></td>
                            <td><?= $pgw['Nama']; ?></td>
                            <td><?= $pgw['Gender']; ?></td>
                            <td><?= $pgw['Telp']; ?></td>
                            <td><?= $pgw['Email']; ?></td>
                            <td><?= $pgw['Pendidikan']; ?></td>
                            <td>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="/Pegawai/Detail/<?= $pgw['Nim'] ?>"><button type="button">Detail<button></a>
                                <a href="/Pegawai/Edit/<?= $pgw['Nim'] ?>"><button type="button">Edit<button></a>
                                <a href="/Pegawai/Delete/<?= $pgw['Nim'] ?>"><button type="button" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Delete<button></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            <?php endif; ?>
        </table>
    <?php endif; ?>
    

    </br>
    <a href="/Pegawai/Create"><button type="button">Tambah Data</button></a>
    </br>
    </br>
    <a href="/"><button type="button">Kembali Ke Home</button></a>



<?= $this->endsection(); ?>