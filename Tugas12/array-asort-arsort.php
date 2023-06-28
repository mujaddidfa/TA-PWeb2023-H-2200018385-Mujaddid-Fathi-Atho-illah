<?php
    $arrNilai = array("Adid" => 80, "Iky" => 90, "Dian" => 75, "Arvin" => 85);
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