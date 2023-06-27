<?php
    $arrNilai = array("Fulan" => 80, "Fulin" => 90, "Fulun" => 75, "Falan " => 85);
    echo "Menampilkan isi array asosiatif dengan foreach: <br>";
    foreach ($arrNilai as $nama => $nilai) {
        echo "Nilai $nama = $nilai<br>";
    }

    reset($arrNilai);
    echo "<br>Menampilkan isi array asosiatif dengan WHILE dan LIST: <br>";
    while (list($nama, $nilai) = each($arrNilai)) {
        echo "Nilai $nama = $nilai<br>";
    }
?>