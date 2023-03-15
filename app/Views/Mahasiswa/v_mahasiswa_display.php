<?= $this->extend('layouts/v_Template'); ?>
<?= $this->section('content'); ?>


    <h1>Data Mahasiswa</h1>
        
    <div class="table-responsive">
        <form class="form-inline" action="<?= base_url('/Mahasiswa') ?>" method="get">
            <input type="search" class="form-control mr-sm-2" name="keyword" placeholder="Masukkan Nama Mahasiswa">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
        </form>
    
        <table class="table table-striped table-primary">

        <br/>
            <thead>
                <tr class="thead-dark">
                    
                    <th>Nim</th> 
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Aksi</th>
                
                </tr>
            </thead>

                <?php if (isset($notfound)): ?>
                    <div style="background-color: red; color: white; padding: 10px; width: 220px; margin-bottom: 10px; border-radius: 5%;">
                        <?= $notfound ?>
                    </div>
                <?php else: ?>
                    <tbody>
                    
                            <?php foreach ($mahasiswa as $mhs): ?>
                                <tr class="table">
                                    <td><?= $mhs['Nim']; ?></td>
                                    <td><?= $mhs['Nama']; ?></td>
                                    <td><?= $mhs['Umur']; ?></td>
                                    <td>
                                        <a class="btn btn-primary" role="button" aria-pressed="true" href="/Mahasiswa/Detail/<?= $mhs['Nim'] ?>">Detail</a>
                                        <a class="btn btn-warning" role="button" aria-pressed="true" href="/Mahasiswa/Edit/<?= $mhs['Nim'] ?>">Edit</a>
                                        <a class="btn btn-danger" role="button" aria-pressed="true" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="/Mahasiswa/Delete/<?= $mhs['Nim'] ?>">Delete</a>
                                    </td>
                                
                                </tr>
                            <?php endforeach; ?>
                    
                    </tbody>
                <?php endif; ?>
        </table>
    </div>
    </br>
    
    <a class="btn btn-primary" role="button" aria-pressed="true" href="/Mahasiswa/Create">Tambah Data</a>

    </br>
    </br>

    <a class="btn btn-primary" role="button" href="/">Kembali</a>

    </br>
    <?= $this->endsection(); ?>
