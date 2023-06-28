<?php
    function luas_lingkaran($jari) {
        return 3.14 * $jari * $jari;
    }

    $r = 15;
    echo "Luas lingkaran dengan jari-jari $r = ";
    echo luas_lingkaran($r);
?>