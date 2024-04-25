<?php
//PHP di dalam HTML
//variabel php $
//scope = cakupan
// variabel global && variabel local
//variabel global = variabel yang bisa diakses dimana saja
//variabel local = variabel yang haya bisa diakses dibagian tertentu
$angka = 20;
echo $angka;
echo "<br>";
$nama = "Alwan Habitullah";
$nama_depan = "Budi";
$nama_belakang = "Utomo";
//conctation -> menggabungkan string
echo $nama_depan . " " . $nama_belakang;
echo"<br>";

//operator aritmatika = + - * / %
// operator assigment = = += -= *=
//operator perbandingan = < > <= >=
//== != === !==
//operator logika = && || !
//tipe data = integer, float, string, boolean
var_dump(1 == "1"); // jika menggunnakan === akan false
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Dasar</title>
</head>

<body>
    <h1>
        <?php echo "Selamat datang". $nama?>
    </h1>
</body>

</html>