<?php
    $arrNilai = array("Fulan" => 80, "Fulin" => 90, "Fulun" => 75, "Falan " => 85);
    echo "<b>Array sebelum diurutkan</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";

    asort($arrNilai);
    reset($arrNilai);
    echo "<b>Array setelah diurutkan dengan asort()</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";

    arsort($arrNilai);
    reset($arrNilai);
    echo "<b>Array setelah diurutkan dengan arsort()</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";
?>