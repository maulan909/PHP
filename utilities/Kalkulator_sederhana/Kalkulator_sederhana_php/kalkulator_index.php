<html>
<head>
<?php
        if ($_POST["hitung"]) { // Ketika menombol submit/value="Hitung" akan mengelompokkan dari nilai1, nilai2, tambah, kurang, kali, bagi, untuk penghitungan
    $nilai1 = $_POST["nilai1"]; // nilai1 penamaan untuk Nilai 1
    $nilai2 = $_POST["nilai2"]; // nilai2 penamaan untuk Nilai 2
    $tambah = $nilai1 + $nilai2; // tambah penamaan untuk +
    $kurang = $nilai1 - $nilai2; // kurang penamaan untuk -
    $kali = $nilai1 * $nilai2; // kali penamaan untuk *
    $bagi = $nilai1 / $nilai2; // bagi penamaan untuk /
        }
?>
<body>
<form action="kalkulator_index.php" method="POST"> <!-- Method POST digunakan untuk menangkap data. --> 
<table border="2"> <!-- Membuat border table -->
<tr>
<td colspan="2"><center><b>Kalkulator</b></td>
</tr>
<tr>
<td><b>Nilai 1</b></td>
<td><input type="text" name="nilai1" value="<?php echo $nilai1;?>"></td>
</tr>
<tr>
<td><b>Nilai 2</b></td>
<td><input type="text" name="nilai2" value="<?php echo $nilai2;?>"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="hitung" value="Hitung"></td>
</tr>
<tr>
<td>+</td>
<td><input type="text" name="tambah" value="<?php echo $tambah;?>"></td>
</tr>
<tr>
<td>-</td>
<td><input type="text" name="kurang" value="<?php echo $kurang;?>"></td>
<tr>
<td>*</td>
<td><input type="text" name="kali" value="<?php echo $kali;?>"></td>
</tr>
<tr>
<td>/</td>
<td><input type="text" name="bagi" value="<?php echo $bagi;?>"></td>
</tr>
</html>
</form>
</body>