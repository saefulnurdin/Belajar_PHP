<?php
    //array
    //cara lama bikin array di PHP
    $arr = array (1, 3, 4, 7, 9, 11, 30);
    print_r($arr);
    echo "<br>";
    echo "cara baru menambahkan =>";
    $arr2 = ["Maulana", "Chandra", "Yudha", "Naufal"];
    print_r($arr2);
    echo "<br>";
    var_dump($arr2);
    echo "<br>";
    echo "$arr2[3]";
    //mengedit isi array
    $arr2[3] = "Jabbar";
    echo "<br>";
    //menambah isi array
    $arr2[4] = "Naufal";
    echo "<br>";
    //menambah isi array
    $arr2[] = "Saeful";
    print_r($arr2);
    echo "<br>";
    //foreach
    foreach ($arr2 as $a) {
        echo $a, "<br>";
    }
?>