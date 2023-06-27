<?php
    if (isset($_POST['Pilih'])) {
        $film = $_POST['kartun'];
        echo "Film Favorit Saudara adalah : <font color=blue><b>$film</b></font>";
    }
?>