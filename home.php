<?php
session_start();
include "navbar.php";

// Periksa apakah pengguna sudah login
$isLoggedIn = isset($_SESSION['user']);
$nama = $isLoggedIn ? $_SESSION['user'] : 'Guest';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CurhatKuy - Beranda</title>
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
    <div class="container-isi"><br>
        <h1 class="mt-4">YOU ARE NOT ALONE AND IT'S OKAY TO NOT BE OKAY</h1> <br>
        <h5>Silahkan curhat dan keluarkan semuanya di sini, <?php echo htmlspecialchars($nama); ?>, you deserve love</h5> <br><br>
        
        <!-- Tombol "CURHAT SEKARANG" -->
        <div class="tombol-container">
            <?php if ($isLoggedIn): ?>
                <a href="curhat.php" class="tombol"><b>CURHAT SEKARANG</b></a>
            <?php else: ?>
                <a href="login.php" class="tombol"><b>CURHAT SEKARANG</b></a>
                <p>Anda harus login untuk menggunakan fitur ini.</p>
            <?php endif; ?>
        </div> <br><br><br><br>
    </div>

    <div class="kotak">
        <h1>Butuh teman untuk berbagi?</h1>
        <p>Saat dunia terasa berat, berbagi cerita adalah langkah pertama menuju penyembuhan. Di sini, kamu bisa curhat tanpa takut dihakimi, karena privasi kamu aman. Saatnya berbicara, Curhatkuy! adalah tempatmu untuk merasa didengar.</p>
        
        <!-- Tombol "TEMUKAN TEMAN" -->
        <?php if ($isLoggedIn): ?>
            <a href="temukan_teman.php" class="tombol"><b>TEMUKAN TEMAN</b></a>
        <?php else: ?>
            <a href="login.php" class="tombol"><b>TEMUKAN TEMAN</b></a>
            <p>Anda harus login untuk menggunakan fitur ini.</p>
        <?php endif; ?>
    </div>

    <footer>
        <p>&copy; Kelompok 8</p>
    </footer>
</body>
</html>
