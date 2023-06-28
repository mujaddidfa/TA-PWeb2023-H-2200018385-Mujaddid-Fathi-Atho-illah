<?php
    $arrNilai = array("Adid" => 80, "Iky" => 90, "Dian" => 75, "Arvin " => 85);
    echo $arrNilai['Adid'] . "<br>"; //80
    echo $arrNilai['Iky'] . "<br><br>"; //90

    $arrNilai = array();
    $arrNilai['Adid'] = 80;
    $arrNilai['Hendik'] = 95;
    $arrNilai['Rendi'] = 77;
    echo $arrNilai['Hendik'] . "<br>"; //95
    echo $arrNilai['Adid'] . "<br>"; //80
?>