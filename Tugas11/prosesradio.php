<?php
    if (isset($_POST['Pilih'])){
        $programstudi = $_POST['prodi'];
        echo "Program Studi yang Saudara pilih adalah: <b><font color='red'> $programstudi</font><b>";
    }
?>