<?php
    include '../connect.php';
    $id_zakat = $_GET['id_zakat'];
    $query = "SELECT * FROM data_zakat";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <form action="verif.php">
    <h1>Pilih Donasi</h1>
    <p><td><label for="id_zakat">ID ZAKAT</label></td>
        <td> :</td>
        <td><input disabled value="<?php echo $row['id_zakat']; ?>" type="text" name="id_zakat" id="telp"><br></td></p>

    <label>Jenis Donasi : </label>
    <select disabled value="<?php echo $row['jenis_zakat']; ?>" name="jenis_zakat">
        <option value="Zakat Maal">Zakat Maal</option>
        <option value="Zakat Penghasilan">Zakat Penghasilan</option>
        <option value="Fidyah">Fidyah</option>
        <option value="Sedekah">Sedekah</option>
    </select>
        <!-- <p><td><label for="nama">Jenis Zakat</label></td>
        <td>:</td>
        <td><input type="text" name="jenis_zakat" id="nama"></td></p> -->

        <p><td><label for="telp">Nominal</label></td>
        <td> :</td>
        <td><input disabled value="<?php echo $row['nominal']; ?>" type="text" name="nominal" id="telp"><br></td></p>

        <h1>Profil Muzaki</h1>
        <p><td><label for="nama">Nama Lengkap</label></td>
        <td>:</td>
        <td><input disabled value="<?php echo $row['nama_lengkap']; ?>" type="text" name="nama_lengkap" id="nama"></td></p>

        <p><td><label for="telp">Alamat</label></td>
        <td> :</td>
        <td><input disabled value="<?php echo $row['alamat']; ?>" type="text" name="alamat" id="telp"><br></td></p>

        <p><td><label for="telp">Email</label></td>
        <td> :</td>
        <td><input  disabled value="<?php echo $row['email']; ?>" type="text" name="email" id="telp"><br></td></p>

        <p><td><label for="telp">No.Hp</label></td>
        <td> :</td>
        <td><input disabled value="<?php echo $row['no_hp']; ?>" type="text" name="no_hp" id="telp"><br></td></p>

        <label>Metode Pembayaran : </label>
        <select disabled value="<?php echo $row['metode_pembayaran']; ?>" name="metode_pembayaran">
            <option value="BCA">BCA</option>
            <option value="BNI">BNI</option>
            <option value="BRI">BRI</option>
        </select>
        <br>

       
            <label>Slip/Bukti Pembayaran : </label>
            <input type="file" name="file">
            <br>
        <input type="submit" name="btnSimpan" value="Simpan">

        </form>




  </body>
</html>