<?php
    function tambah_string($str) {
        $str = $str . ", Yogyakarta";
        return $str;
    }

    $string = "Universitas Ahmad Dahlan";
    echo "\$string = $string<br>";
    echo tambah_string($string) . "<br>";
    echo "\$string = $string<br>";
?>