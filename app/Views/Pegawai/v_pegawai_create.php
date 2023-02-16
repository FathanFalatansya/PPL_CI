<?= $this->extend('layouts/v_Template'); ?>
<?= $this->section('content'); ?>

<body>
    
    <h2>Tambah Data Pegawai</h2>
    <br>

    <?php
            if (isset($errors)) {
                echo '<div style="width: 300px"; border-radius: 5px; >';
                echo '<ul style="background-color: red; color: white; padding: 10px;">';
                foreach ($errors as $error) {
                    echo "<li>$error</li>";
                }   
                echo '</ul>';
                echo '</div>';
            }
            ?>

    <form action="/Pegawai/Store" method="POST">
        <table>
            <tr>
            <td>NIM:</td>
            <td><input type="number" name="Nim"></td>
            </tr>
            <tr>
            <td>Nama:</td>
            <td><input type="text" name="Nama"></td>
            </tr>
            <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="Gender" value="Pria">Pria
                <input type="radio" name="Gender" value="Wanita">Wanita
            </td>
            </tr>
            <tr>
            <td>Telp:</td>
            <td><input type="tel" name="Telp"></td>
            </tr>
            <tr>
            <td>Email:</td>
            <td><input type="email" name="Email"></td>
            </tr>
            <tr>
            <td>Pendidikan:</td>
            <td>
                <select name="Pendidikan">
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                </select>
            </td>
            </tr>
        </table>
      <br>
      <input type="submit" value="Submit">
    </form>
  </body>


<?= $this->endsection(); ?>
