<?= $this->extend('layouts/v_Template'); ?>
<?= $this->section('content'); ?>

<h1>Edit Data Pegawai</h1>
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
    <form action="/Pegawai/Update/<?= $pegawai['Nim'] ?>" method="POST">
        <table>
            <tr>
            <td>NIM:</td>
            <td><input type="number" name="Nim" value="<?= $pegawai['Nim'] ?>"></td>
            </tr>
            <tr>
            <td>Nama:</td>
            <td><input type="text" name="Nama" value="<?= $pegawai['Nama'] ?>"></td>
            </tr>
            <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="Gender" value="Pria" <?= ($pegawai['Gender'] == 'Pria') ? 'checked' : '' ?>>Pria
                <input type="radio" name="Gender" value="Wanita" <?= ($pegawai['Gender'] == 'Pria') ? 'checked' : '' ?>>Wanita
            </td>
            </tr>
            <tr>
            <td>Telp:</td>
            <td><input type="tel" name="Telp" value="<?= $pegawai['Telp'] ?>"></td>
            </tr>
            <tr>
            <td>Email:</td>
            <td><input type="email" name="Email" value="<?= $pegawai['Email'] ?>"></td>
            </tr>
            <tr>
            <td>Pendidikan:</td>
            <td>
                <select name="Pendidikan">
                <option value="SD" <?php if ($pegawai['Pendidikan'] == 'SD') echo 'selected' ?>>SD</option>
                <option value="SMP" <?php if ($pegawai['Pendidikan'] == 'SMP') echo 'selected' ?>>SMP</option>
                <option value="SMA" <?php if ($pegawai['Pendidikan'] == 'SMA') echo 'selected' ?>>SMA</option>
                </select>
            </td>
            </tr>
        </table>
      <br>
      <input type="submit" value="Submit">
    </form>
  </body>

<?= $this->endsection(); ?>