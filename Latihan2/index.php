<?php
    $mhs = [
    ["prodi" => "Informatika",
    "nim" => "2102920219210",
    "nama" => "Akbar",
    "alamat" => "Cikampek",
    ],
    ["nim" => "32320203232030",
    "nama" => "Fajar",
    "alamat" => "Telagasari",
    "prodi" => "Informatika",
    ],            
    ["nim" => "32320203232030",
    "nama" => "Bisma",
    "alamat" => "Isekai",
    "prodi" => "Informatika",
    ],            
    ["nim" => "32320203232030",
    "nama" => "Putra",
    "alamat" => "Purwasari",
    "prodi" => "Informatika",
    ],            
    ["nim" => "32320203232030",
    "nama" => "Febri",
    "alamat" => "Telagasari",
    "prodi" => "Informatika",
    ],            
    ]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 align="center">Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0" align="center">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Prodi</th>
            <th id="aksi" colspan="2">Aksi</th>
        </tr>
        <?php foreach ($mhs as $m): ?>
        <tr>
            <td><?php echo $m["nim"];?></td>
            <td><?php echo $m["nama"];?></td>
            <td><?php echo $m["alamat"];?></td>
            <td><?php echo $m["prodi"];?></td>
            <td><a href="#">Edit</td>
            <td><a href="#">Hapus</td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>