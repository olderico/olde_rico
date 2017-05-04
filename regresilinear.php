<html>
<head>
<title>Contoh Aplikasi Regresi Linear Sederhana Dengan PHP</title>
</head>
<body>
</body>
</html>
<form name="regresi" method="post" action="index.php">
Nilai A<input name="nilaia" type="text" id="nilaia"><br></br>
Nilai B<input name="nilaib" type="text" id="nilaib"><br></br>
Nilai X<input name="nilaix" type="text" id="nilaix"><br></br>
<input type="submit" name="Submit" value="Hitung">
</form>
<?php
\error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$nilaia = $_POST['nilaia'];
$nilaib = $_POST['nilaib'];
$nilaix = $_POST['nilaix'];
$hasil = $nilaia+($nilaib*$nilaix);
echo"Nilai Regresinya adalah= ";
print "$hasil";
?>