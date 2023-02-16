<?= $this->extend('layouts/v_Template'); ?>
<?= $this->section('content'); ?>
    <!-- Cek apakah sudah Login/Belum -->
    <?php if (session()->get('isLoggedIn')): ?>
            <p>Anda sudah Melakukan Login</p>
    <?php else: ?>    
        <h1>Login</h1>        
                <?php if (session()->getFlashdata('error')) : ?>
                <div style="background-color: red; color: white; padding: 10px; width: 220px; margin-bottom: 10px; border-radius: 5%;">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>
            <form action="/login" method="post">
                <table>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><input type="text" name="username" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><button type="submit">Login</button></td>
                    </tr>
                </table>
            
      
   
    <?php endif; ?>

    

<?= $this->endsection(); ?>