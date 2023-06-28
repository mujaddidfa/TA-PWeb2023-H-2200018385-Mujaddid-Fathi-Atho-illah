<?php
    function tambah_string($str) {
        $str = $str . ", Medan";
        return $str;
    }

    $string = "Universitas Muhammadiyah Sumatera Utara";
    echo "\$string = $string<br>";
    echo tambah_string($string) . "<br>";
    echo "\$string = $string<br>";
?>