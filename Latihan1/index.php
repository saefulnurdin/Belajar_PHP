<?php
function menghitungHari($jumlahHari) {
    $namaHari = date ('1', strtotime(date('Y-m-d')."+".$jumlahHari."days"));
    switch ($namaHari) {
        case 'Monday':
            $translateHari = "Senin";
            break;
        case 'Tuesday':
            $translateHari = "Selasa";
            break;
        case 'Wednesday':
            $translateHari = "Rabu";
            break;
        case 'Thrusday':
            $translateHari = "Kamis";
            break;
        case 'Friday':
            $translateHari = "Jumat";
            break;
        case 'Saturday':
            $translateHari = "Sabtu";
            break;
        case 'Sunday':
            $translateHari = "Minggu";
            break;
            default:
            $translateHari = "Nama hari tidak vaild";
            break;
 }
 return $translateHari;
}
$jumlahHari = 120;
echo "$JumlahHari hari setelah hari ini adalah hari" .menghitungHari($jumlahHari)
?>