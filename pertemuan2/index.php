<?php
    //function -> program di dalam program
    //built -in function => fungsi ynag sudah dibuat di PHP
    //user -defined function => fungsi yang dibuat oleh kita sendiri
    //fungsi -> blok kode yang dijalankan secara terpisah

    //date, time, mktime, strtotime
    date_default_timezone_set("Asia/Jakarta");
    echo date("l, j F Y H:i:s");    
    //l nama hari yang lengkap 
    //d -> hari format 01 sampai 31
    //j -> hari format 1 sampai 31
    //m -> bulan format 01 sampai 12
    //n -> bulan format 1 sampai 12
    //y -> tahun format 00 sampai 99
    //Y -> tahun format 0000 sampai 9999
    //H -> jam format 00 sampai 23
    //i -> menit format 00 sampai 59
    //s -> detik format 00 sampai 59
    //a -> format am/pm
    //A -> format AM/PM
    //l -> hari dalam bahasa indonesia
    //F -> bulan dalam bahasa indonesia
    //M -> bulan dalam bahasa indonesia
    //S -> detik dalam bahasa indonesia

    //time = jumlah detik sejak 1 januari 1970
    echo time();

    // mktime
    // echo mktime(0,0,0,7,24,2004);//jumlah detik dari 1 januari 1970 - sampai tanggal yang diinginkan

    //strtotime -> mengubah setring jadi tanggal
    // echo strtotime("24 juli 2024");

    // date_parse -> memcah tanggal 
    // print_r(date_parse
?>