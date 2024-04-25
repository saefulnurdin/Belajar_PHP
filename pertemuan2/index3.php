<!-- indomie
lifebuoy
sarimie
indomilk
florida
frutang
ubahlah nama-nama barang tersebut menjadi sebuah kode barang menggunakan built in function di PHP 
contoh : IND-001, LIF-002, SAR-003 -->
<!-- <?php
$kata1 = "indomie";
$kata2 = "lifebuoy";
$kata3 = "sarimie";
$kata4 = "indomilk";
$kata5 = "florida";
$kata6 = "frutang";

$kode1 = strtoupper(substr($kata1, 0, 3)) . "-001";
$kode2 = strtoupper(substr($kata2, 0, 3)) . "-002";
$kode3 = strtoupper(substr($kata3, 0, 3)) . "-003";
$kode4 = strtoupper(substr($kata4, 0, 3)) . "-004";
$kode5 = strtoupper(substr($kata5, 0, 3)) . "-005";
$kode6 = strtoupper(substr($kata6, 0, 3)) . "-006";

echo $kode1 . "<br>";
echo $kode2 . "<br>";
echo $kode3 . "<br>";
echo $kode4 . "<br>";
echo $kode5 . "<br>";
echo $kode6 . "<br>";
?> -->

<?php
// user defined function
// function namaFungsi($parma1, $parma2, $parma3,...){
// perintah dieksekusi
// }
//camelCase => diawali dengan huruf kecil
//penjumlahan => bisasanya digunakan ketika class => OOP
function penjumlahan($a, $b){
    return $a + $b;
}
function luasSegitiga($alas, $tinggi){
    return $alas * $tinggi / 2;
}
echo penjumlahan(4, 3) . "<br>";
$alas = 4;
$tinggi = 5;
echo "Luas segitiga dengan panjang alas $alas dan tinggi $tinggi adalah " . luasSegitiga($alas, $tinggi) . "<br>";

// funtion iniFungsi($parm1 = "", $parm2 =""){
    
// }
// echo iniFungsi();
//contoh parameter default
function sapa($waktu ="", $nama = ""){
    return "Selamat $waktu datang, $nama!";
    if ($waktu == "" && $nama == ""){
        return "Selamat datang, User!";
}else {
    return "Selamat datang, $nama!";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP - Function</title>
</head>

<body>
    <h1><?php echo sapa("Malam", "Faisal") ?></h1>
</body>

</html>