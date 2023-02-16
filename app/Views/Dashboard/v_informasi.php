<?= $this->extend('layouts/v_Template'); ?>
<?= $this->section('content'); ?>
<h1>Hallo </h1>
<p>
    Ini merupakan halaman Informasi, silahkan klik menu di atas untuk mengakses halaman lainnya.
    untuk mengakses halaman Data Mahasiswa anda harus login terlebih dahulu. login disini 
    <a href="/login">Login</a>
</p>
<?= $this->endsection(); ?>