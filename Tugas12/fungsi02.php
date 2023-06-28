<?php
    //fungsi ini dengan return value, & parameter
    function cetak_ganjil($awal, $akhir) {
        for ($i = $awal; $i < $akhir; $i++) {
            if ($i % 2 == 1) {
                echo "$i, ";
            }
        }
    }
    //Pemanggilan fungsi
    $a = 100;
    $b = 150;
    echo "<b>Bilangan ganjil dari $a sampai $b, adalah:</b><br>";
    cetak_ganjil($a, $b);
?>