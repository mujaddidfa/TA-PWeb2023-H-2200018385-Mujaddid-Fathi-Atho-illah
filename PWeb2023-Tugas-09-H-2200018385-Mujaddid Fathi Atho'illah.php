<?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);

    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp <br>";
?>

<br><br>

<?php
    $a = 5;
    $b = 4;

    echo "$a == $b : ". ($a == $b);
    echo "<br>$a != $b : ". ($a != $b);
    echo "<br>$a > $b : ". ($a > $b);
    echo "<br>$a < $b : ". ($a < $b);
    echo "<br>($a == $b) && ($a > $b) : ". (($a == $b) && ($a > $b));
    echo "<br>($a == $b) || ($a > $b) : ". (($a == $b) || ($a > $b));
?>