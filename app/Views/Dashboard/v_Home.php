<?= $this->extend('layouts/v_Template'); ?>
<?= $this->section('content'); ?>
<h1>Hallo ini Merupakan Halaman Home !</h1>

    <?php if (session()->get('isLoggedIn')) : ?>
        <h3>Selamat datang, <?= session()->get('user_name') ?> 👋</h3>
    <?php else : ?>
        <h3>Selamat datang, Guest</h3>
    <?php endif; ?>
    
<?= $this->endsection(); ?>