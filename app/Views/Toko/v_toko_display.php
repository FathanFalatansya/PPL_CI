<?= $this->extend('layouts/v_Template'); ?>
<?= $this->section('content'); ?>

<div class="row d-flex justify-content-around">
    <?php foreach ($produk as $p) {
    ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?= $p['gambar'] ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $p['nama_produk'] ?></h5>
                <p class="card-text"><?= $p['deskripsi']?></p>
                <p class="card-text">Rp. <?= $p['harga'] ?>,-</p>
                <p class="card-text"> Stok : <?= $p['stok_barang']?></p>
                <a href="#" class="btn btn-primary">Beli</a>
                <a href="Toko/add-to-cart/<?= $p['id_produk'] ?>" class="btn btn-warning">Tambah Keranjang</a>
            </div>
        </div>
    <?php } ?>
    
    
</div>     







<?= $this->endSection(); ?>