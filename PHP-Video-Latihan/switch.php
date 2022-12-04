<?php 

    // $hari = 1;

    // switch ($hari) {
    //     case 1:
    //         echo 'Minggu';
    //         break;

    //     case 2:
    //         echo 'Senin';
    //         break;

    //     case 3:
    //         echo 'Selasa';
    //         break;

    //     default:
    //         echo 'Hari Belum Di Inputkan';
    //         break;
    // }

    $pilihan = 'tambah';

    switch ($pilihan) {
        case 'tambah':
            echo 'Anda Memilih Tambah';
            break;
        
        case 'ubah':
            echo 'Anda Memilih Ubah';
            break;
        
        case 'hapus':
            echo 'Anda Memilih Hapus';
            break;
        
        default:
            echo 'Pilihan Belum Di Inputkan';
            break;
    }
?>