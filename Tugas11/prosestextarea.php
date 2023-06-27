<?php
    if (isset($_POST['Proses'])) {
        $komentar = nl2br($_POST['komentar']);
        echo "Komentar Saudara adalah : <br>";
        echo "<font color=blue><b>$komentar</b></font>";
    }
?>