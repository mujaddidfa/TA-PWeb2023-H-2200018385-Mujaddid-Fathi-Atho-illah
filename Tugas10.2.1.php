<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nilai = $_POST['nilai'];
        if ($nilai >= 80 && $nilai <= 100) {
            $keterangan = "A";
        } elseif ($nilai >= 76.25 && $nilai < 80) {
            $keterangan = "A-";
        } elseif ($nilai >= 68.75 && $nilai < 76.25) {
            $keterangan = "B+";
        } elseif ($nilai >= 65 && $nilai < 68.75) {
            $keterangan = "B";
        } elseif ($nilai >= 62.50 && $nilai < 65) {
            $keterangan = "B-";
        } elseif ($nilai >= 57.50 && $nilai < 62.50) {
            $keterangan = "C+";
        } elseif ($nilai >= 55 && $nilai < 57.50) {
            $keterangan = "C";
        } elseif ($nilai >= 51.25 && $nilai < 55) {
            $keterangan = "C-";
        } elseif ($nilai >= 43.75 && $nilai < 51.25) {
            $keterangan = "D+";
        } elseif ($nilai >= 40 && $nilai < 43.75) {
            $keterangan = "D";
        } elseif ($nilai >= 0 && $nilai < 40) {
            $keterangan = "E";
        } else {
            $keterangan = " tidak valid";
        }
    }
?>

<!DOCTYPE html>
<html>
<body>
    <form method="POST" action="">
        Nilai: <input type="number" name="nilai" value="<?php echo $nilai; ?>">
        <input type="submit" value="Submit">
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <p>Nilai Anda <?php echo $nilai; ?><br> Nilai Anda dalam huruf <?php echo $keterangan; ?></p>
    <?php endif; ?>
</body>
</html>