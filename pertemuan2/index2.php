<?php
    // built in function untuk manipulasi setring

    //explode, implode, strlen, strcmp

    //strlen=> mengetahui panjang string
    echo strlen("Hello World"), "<br>";
    echo strlen("Selamat datang di BLK Karawang"), "<br>";

    //str_world_count => menghitung kata
    echo str_word_count("Velit excepteur voluptate magna voluptate qui pariatur adipisicing anim tempor Lorem aliquip aliquip occaecat. Cupidatat do ut qui reprehenderit excepteur amet veniam quis officia qui anim duis. Commodo sunt eiusmod consectetur ut culpa excepteur labore id pariatur ullamco."), "<br>";

    //strcmp => menghitung 2 buah string/kata
    //strcasecmp => menghitung 2 buah string/kata dengan huruf kapital
    $kata1 = "katak";
    $kata2 = "katak";

    if (strcmp($kata1, $kata2) !== 0) {
        echo "$kata1 tidak sama dengan $kata2";
    }else {
        echo "$kata1 sama dengan $kata2";
    }
    echo "<br>";
    //explode => memecah string menjadi array
    print_r(explode("-", "AYAM GOYENG-ENAK-SEKALI"));
    echo "<br>";
    print_r(explode(" ", "Tofik, Fisal, Rian"));
    echo "<br>";

    //implode => menggabungkan array menjadi string
    $str = array("SELAMAT", "DATANG", "DI", "PEMROGRAMAN", "PHP");  
    echo implode(" ", $str);
    echo "<br>";

    //strtolower => mengubah semua karakter menjadi huruf kecil
    echo strtolower("SELAMAT DATANG DI PEMROGRAMAN PHP");
    echo "<br>";

    //strtoupper => mengubah semua karakter menjadi huruf kapital
    echo strtoupper("selamat datang di pemrograman php");
    echo "<br>";

    //substr => memotong string/mengambil beberapa karakter dari sebuah string
    $kata3 = "123456789";
    echo substr($kata3, 2, 5), "<br>";
    echo substr($kata3, -7, 5), "<br>";//ngambil dari belakang
?>