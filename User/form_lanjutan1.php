    
<?php
    include '../connect.php';
    $id_zakat = $_GET['id_zakat'];
    $query = "SELECT * FROM data_zakat WHERE id_zakat = $id_zakat";
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
    <h2>Terima kasih atas donasi anda melalui bank <?php echo $row['metode_pembayaran']; ?> </h2>

    <p>Terima kasih telah melakukan donasi melalui zakat kuy</p>
    <p>berikut adalah resume donasi <?php echo $row['nama_lengkap']; ?> : </p>
    <p>Email : <?php echo $row['email']; ?> </p>
    <p>Jenis Donasi :  <?php echo $row['jenis_zakat']; ?> </p>
    <p>Nominal : <?php echo $row['nominal']; ?> </p>

    <br>
    <p>silakan lakukan pembayaran segera ke rekening berikut ini : </p>
    <p>BCA : 321 890123</p>
    <p>Atas Nama : Zakat kuy pasti berkah</p>

        <input type="submit" name="btnSimpan" value="Konfirmasi Pembayaran">

    

  </body>
</html>