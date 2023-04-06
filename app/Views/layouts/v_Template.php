<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title><?= $title ?? "PPL" ?></title>
</head>

<body>
  

         
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #8be8cf">
                    <div class="container-fluid">
                        <a href="/" class="navbar-brand">PPL APP</a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <div class="navbar-nav">
                                <a href="/" class="nav-item nav-link active">Home</a>
                                <a href="/info" class="nav-item nav-link">info</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pusat data</a>
                                    <div class="dropdown-menu">
                                        <a href="/Mahasiswa" class="dropdown-item">Data Mahasiswa</a>
                                        <a href="/Pegawai" class="dropdown-item">Data Pegawai</a>
                                    </div>
                                </div>
                                <a href="/Toko" class="nav-item nav-link">Toko</a>
                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Cart&nbsp;<?= count(session('cart')) ?></a>
                                        <div class="dropdown-menu">
                                            <?php if (session()->get('cart')): ?>
                                                <?php if (session()->has('cart')) { ?>
                                                    <?php foreach (session('cart') as $item) : ?>
                                                        <div class="dropdown-item">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-sm">
                                                                        <p class="mb-0"><?= $item['nama_produk'] ?></p>
                                                                        <p class="mb-0">Rp. <?= number_format($item['harga']) ?>,-</p>
                                                                        <p class="mb-0">Qty: <?= $item['jumlah'] ?></p>
                                                                        <p class="mb-0">Sub Total: Rp. <?= number_format ($item['harga'] * $item['jumlah']) ?>,-</p>
                                                                    </div>
                                                                    <div class="col-sm">
                                                                        <a href="<?= base_url('Toko/remove-from-cart/' . $item['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                    <div class="dropdown-item">
                                                        <div class="container">
                                                            <div class="row">                                                               
                                                                <div class="col-sm">
                                                                                    <?php
                                                                    // cek product pada session dan totalkan harga semuanya
                                                                    $total = 0;
                                                                    foreach (session('cart') as $item) {
                                                                        $total += $item['harga'] * $item['jumlah'];
                                                                    }

                                                                    ?>
                                                                <p>Total Harga : Rp <?= number_format($total ?? 0) ?>.- </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } else { ?>
                                                        <p class="dropdown-item">Cart kosong</p>
                                                        <?php } ?>
                                            <?php else: ?>
                                                <p class="dropdown-item">Cart kosong</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                            
                            
                                <div class="navbar-nav ms-auto">
                                    
                                    <?php if (session()->get('isLoggedIn')): ?>
                                        <!-- Tampilkan button untuk session yang aktif -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <?= session()->get('user_name') ?>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                                                
                                            </ul>
                                            </li>
                                    <?php else: ?>
                                                <a href="/login" class="nav-item nav-link">Login</a>
                                    <?php endif; ?></li>
                                </div>

                            </div>
                    </div>
                </nav>
           
            <table width="100%" height="720px">
                <tr bgcolor="lightblue" >
                    <td colspan="2" >
                        <center>
                            <?= $this->renderSection('content') ?>
                        </center>
                    </td>
                </tr>
            </table>
       

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: #8be8cf">
    © 2023 Copyright:
    <a class="text-dark" href="/">Fathan Falatansya Firdaus</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
    
</html>