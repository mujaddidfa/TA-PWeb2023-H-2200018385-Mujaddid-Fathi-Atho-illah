<?php
    if (isset($_POST['Proses'])) {
        $saran = nl2br($_POST['saran']);
        echo "Kritik / Saran Saudara adalah : <br>";
        echo "<font color=blue><b>$saran</b></font>";
    }
?>