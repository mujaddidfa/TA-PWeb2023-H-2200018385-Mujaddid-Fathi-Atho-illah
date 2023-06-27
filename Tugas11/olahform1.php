<html>
    <head> <title>Pengolahan Form cara #1</title></head>
    <body>
        <form action="" method="post" name="input">
            Username Anda : <input type="text" name="nama"><br>
            <input type="submit" name="Input" value="Tampilkan isi TextBox">
        </form>
    </body>
</html>

<?php
    if (isset($_POST['Input'])) {
        $nama = $_POST['nama'];
        echo "Username Anda : <b>$nama</b>";
    }
?>