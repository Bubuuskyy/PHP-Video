<?php 

    // ARRAY DIMENSI

    // $nama = array ("Joni","Paijo","Budi","Siti",100,2.5);
    // var_dump ($nama);

    // echo '<br>';

    // echo $nama[5];

    // echo '<br>';

    // for ($i=0; $i < 6 ; $i++) { 
    //     // echo $i;
    //     echo $nama[$i].'<br>';
    // }

    // foreach ($nama as $key) {
    //     echo $key.'<br>';
    // }


    // ARRAY ASOSIATIF
    
    // $nama = array(
    //     "Joni" => "Surabaya",
    //     "Tejo" => "Malang",
    //     "Budi" => "Jakarta",
    //     "Siti" => "Sidoarjo"
    // );

    $nama["Joni"]="Surabaya";
    $nama["Budi"]="Malang";
    $nama["Tejo"]="Jakarta";
    $nama["Siti"]="Sidoarjo";
    $nama["Edi"]="Semarang";

    var_dump($nama);

    echo '<br>'.'<br>';

    // echo $nama ['Budi'];  

    foreach ($nama as $key => $value) {
        echo $key.' '.$value;
        
        echo '<br>';
    }
?>