<?php 

    $tanggal = 31;

    if ($tanggal < 32) {
        if ($tanggal > 0) {
            echo 'Benar';
        }else {
            echo 'Tanggal Tidak Valid';
        }
    }else {
        echo 'Tanggal Tidak Valid';
    }

    echo '<br>';

    $nilai = 100;

    if ($nilai <= 100) {
        if ($nilai >= 0) {
            echo 'Nilai Benar';
        }else {
            echo 'Nilai Tidak Valid';
        }
    }else {
        echo 'Nilai Tidak Valid';
    }

    echo '<br>';

    if ($nilai >= 0 && $nilai <= 100) {
        echo 'Nilai Benar';
    }else{
        echo 'Nilai Tidak Valid';
    }

    echo '<br>';

    if ($nilai >= 100 || $nilai <= 0) {
        echo 'Nilai Tidak Valid';
    }else {
        echo 'Nilai Benar';
    }
?>