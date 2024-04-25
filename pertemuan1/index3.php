<?php
    //percabangan if, if else, if else if else, switch

    $angka = 20;
    if ($angka % 2== 0) {
        echo "$angka adalah bilangan genap";
    }else{
        echo "$angka adalah bilangan ganjil";
    }
print "<br>";
//if else..if else
$nilai = 78;
if ($nilai > 85){
    echo "Index nilai anda A";
}else if ($nilai >75 && $nilai < 85){
    echo "Index nilai anda B";
}else if ($nilai >60 && $nilai < 75){
    echo "Index nilai anda C";
}else if ($nilai >45 && $nilai < 60) {
echo "Index nilai anda D";
}else {
    echo "Index nilai anda E";
}
print "<br>";
//switch case
switch ($nilai) {
case ($nilai > 85):
    echo "Index nilai anda A";
    break;
    case ($nilai >75 && $nilai < 85):
        echo "Index nilai anda B";
        break;
        case ($nilai >60 && $nilai < 75):
            echo "Index nilai anda C";
            break;
            case ($nilai >45 && $nilai < 60):
                echo "Index nilai anda D";
                break;
               case ($nilai <= 45):
                echo "Index nilai anda E";
                break;
                default:
                echo "Index nilai anda tidak diketahui";
                break;
                  }
                  print("<br>");
                  //pengulangan
                  //for 
                  for ($i = 0; $i < 10; $i++) {
                    echo "Angka Ke-$i <br>";
                  }
                  print("<br>");
                  for ($j = 10; $j >= 0; $j--) {
                    echo "Angka Ke-$j <br>";
                  }
                  print("<br>");
                  //while 
                  $k = 0;
                  while ($k < 10) {
                    echo "Angka Ke-$k <br>";
                    $k++;
                  }
                  // do while
                  $x = 0;
                  do {
                    echo "Bilangan Ke-$x <br>";
                    $x++;
                  }while ($x < 10);
?>