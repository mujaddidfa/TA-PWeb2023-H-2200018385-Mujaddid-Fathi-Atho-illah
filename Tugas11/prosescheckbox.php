<?php
    if (isset($_POST['Pilih'])) {
        echo "Film 2023 Favorit Anda adalah : <br>";
        if (isset($_POST['film1'])) {
            echo "+ " . $_POST['film1'] . "<br>";
        }
        if (isset($_POST['film2'])) {
            echo "+ " . $_POST['film2'] . "<br>";
        }
        if (isset($_POST['film3'])) {
            echo "+ " . $_POST['film3'] . "<br>";
        }
        if (isset($_POST['film4'])) {
            echo "+ " . $_POST['film4'] . "<br>";
        }
    }
?>