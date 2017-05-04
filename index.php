 <!DOCTYPE html>
<html>
<body bgcolor="pink">
<head><title>Web Penjumlahan</title></head>
<body>
<h1>PENJUMLAHAN</h1>
<form method="post">
<table>
 <tr>
  <td align="center">Angka 1</td>
  <td></td>
  <td align="center">Angka 2</td>
 </tr>
 <tr>
  <td><input type="number" name="angka1" value="<?php echo $_POST["angka1"] ?>" placeholder="Tidak Boleh Kosong" required></td>
  <td>+</td>
  <td><input type="number" name="angka2" value="<?php echo $_POST["angka2"] ?>" placeholder="Tidak Boleh Kosong" required></td>
  <td>=</td>
    <?php
     if(isset($_POST["jumlahkan"])){
    $hasil1 = $_POST["angka1"] + $_POST["angka2"];
   }
  ?>
  <td><input type="text" name="hasil1" disabled value="<?php echo $hasil1;?>"></td>
  <td><input type="submit" name="jumlahkan" value="Hitung"></td>
   </tr>
 </table>
</form>
</body>
 <h1>PENGURANGAN</h1>
 <form method="post">
 <table>
 <tr>
  <td align="center">Angka 1</td>
  <td></td>
  <td align="center">Angka 2</td>
 </tr>
 <tr>
  <td><input type="number" name="angka3" value="<?php echo $_POST["angka3"] ?>" placeholder="Tidak Boleh Kosong" required></td>
  <td>-</td>
  <td><input type="number" name="angka4" value="<?php echo $_POST["angka4"] ?>" placeholder="Tidak Boleh Kosong" required></td>
  <td>=</td>
  <?php
   if(isset($_POST["hitung1"])){
    $hasil2 = $_POST["angka3"] - $_POST["angka4"];
   }
  ?>
  <td><input type="text" name="hasil2" disabled value="<?php echo $hasil2;?>"></td>
  <td><input type="submit" name="hitung1" value="Hitung"></td>
 </tr>
 </table>
</form>
</body>
 <h1>PERKALIAN</h1>
 <form method="post">
 <table>
 <tr>
  <td align="center">Angka 1</td>
  <td></td>
  <td align="center">Angka 2</td>
 </tr>
 <tr>
  <td><input type="number" name="angka5" value="<?php echo $_POST["angka5"] ?>" placeholder="Tidak Boleh Kosong" required></td>
  <td>*</td>
  <td><input type="number" name="angka6" value="<?php echo $_POST["angka6"] ?>" placeholder="Tidak Boleh Kosong" required></td>
  <td>=</td>
  <?php
   if(isset($_POST["hitung1"])){
    $hasil3 = $_POST["angka5"] * $_POST["angka6"];
   }
  ?>
  <td><input type="text" name="hasil3" disabled value="<?php echo $hasil3;?>"></td>
  <td><input type="submit" name="hitung1" value="Hitung"></td>
 </tr>
 </table>

</form>
</body>
 <h1>PEMBAGIAN</h1>
 <form method="post">
 <table>
 <tr>
  <td align="center">Angka 1</td>
  <td></td>
  <td align="center">Angka 2</td>
 </tr>
 <tr>
  <td><input type="number" name="angka7" value="<?php echo $_POST["angka7"] ?>" placeholder="Tidak Boleh Kosong" required></td>
  <td>:</td>
  <td><input type="number" name="angka8" value="<?php echo $_POST["angka8"] ?>" placeholder="Tidak Boleh Kosong" required></td>
  <td>=</td>
  <?php
   if(isset($_POST["hitung3"])){
    $hasil4 = $_POST["angka7"] / $_POST["angka8"];
   }
  ?>
  <td><input type="text" name="hasil4" disabled value="<?php echo $hasil4;?>"></td>
  <td><input type="submit" name="hitung3" value="Hitung"></td>
 </tr>
 </table>
</form>
</body>
</html>