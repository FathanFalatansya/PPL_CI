<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "PPL" ?></title>
</head>

<body>
    <main>

        <table border=3 width="100%" height="40px">
            <tr bgcolor="lightgreen">
                <th colspan="2" >
                    <h1>Selamat datang di <?= $title ?? "Tugas web PPL" ?></h1>
                </th>
            </tr>
        </table>
            <table border=3 width="100%" height="55px">
                <tr bgcolor="lightyellow">
                    <td>
                        <a href="/"><button type="button">Home</button></a>
                        <a href="/info"><button type="button">Info</button></a>
                        <a href="/Mahasiswa"><button type="button">Data Mahasiswa</button></a>
                    </td>
                </tr>
            </table >
            
            <table border=3 width="100%" height="720px">
                <tr bgcolor="lightyellow">
                    <td colspan="2" >
                        <center>
                            <?= $this->renderSection('content') ?>
                        </center>
                    </td>
                </tr>
            </table>
            <table border=3 width="100%">
                <tr bgcolor="lightgreen">
                    <td colspan="2">
                            <h3>&copy; Fathan Falatansya F</h3>
                    </td>
                </tr>
            </table>
            
       
    </main>
</body>

</html>