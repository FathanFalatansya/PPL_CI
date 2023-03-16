<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <title><?= $title ?? "PPL" ?></title>
</head>

<body>
  

         
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(0, 0, 0, 0.2);">
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
                            </div>
                            <div class="navbar-nav ms-auto">
                                <?php if (session()->get('isLoggedIn')): ?>
                                    <!-- Tampilkan button untuk session yang aktif -->
                                    <a href="/logout" class="nav-item nav-link">Logout</a>
                                <?php else: ?>
                                            <a href="/login" class="nav-item nav-link">Login</a>
                                <?php endif; ?></li>
                            </div>
                        </div>
                    </div>
                </nav>
           
            <table width="100%" height="720px">
                <tr bgcolor="lightyellow">
                    <td colspan="2" >
                        <center>
                            <?= $this->renderSection('content') ?>
                        </center>
                    </td>
                </tr>
            </table>
       

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
    
</html>