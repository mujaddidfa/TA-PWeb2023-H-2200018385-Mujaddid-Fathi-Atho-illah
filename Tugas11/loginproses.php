<?php
    if (isset($_POST['Login'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if ($user == "mahasiswa" && $pass == "mhs123") {
            echo "<h2>Login berhasil, selamat datang di Portal UAD</h2>";
        } else {
            echo "<h2>Username/Password salah, coba lagi</h2>";
        }
    }
?>