<?php 

    //OPERATOR MATEMATIKA

    $a = 2;
    $b = 2;
    
    $c = $a + $b;
    echo $c,'<br>';

    $c = $a - $b;
    echo $c,'<br>';

    $c = $a * $b;
    echo $c,'<br>';

    $c = $a / $b;
    echo round($c),'<br>';

    $c = $a % $b;
    echo $c,'<br>';

    //OPERATOR LOGIKA

    $c = $a < $b;
    echo $c,'<br>';

    $c = $a > $b;
    echo $c,'<br>';

    $c = $a == $b;
    echo $c,'<br>';

    $c = $a != $b;
    echo $c;

    //OPERATOR INCREMENT
    
    $a++;
    echo $a,'<br>';

    //OPERATOR STRING

    $kata = 'Sura';
    $kota = 'baya';

    $hasil = $kata.$kota;

    $hasil = $hasil.' Kota Pahlawan';
    echo $hasil;
?>