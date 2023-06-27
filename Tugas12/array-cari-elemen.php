<?php
    $arrBuah = array("Mangga", "Apel", "Pisang", "Jeruk");
    if (in_array("Kedondong", $arrBuah)) {
        echo "Ada buah Kedondong di dalam array tsb!";
    } else {
        echo "Tidak ada buah Kedondong di array tersebut";
    }
?>