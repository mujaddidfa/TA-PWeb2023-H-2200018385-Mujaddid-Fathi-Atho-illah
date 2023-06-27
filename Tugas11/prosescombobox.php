<?php
    if (isset($_POST['Pilih'])) {
        $superhero = $_POST['superhero'];
        echo "Karakter Superhero Favorit Saudara adalah : <font color=blue><b>$superhero</b></font>";
    }
?>