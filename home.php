<?php
session_start();
include "navbar.php";

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$nama = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/home.css">
    </head>
<body>
          <div class="container-isi"><br>
            <h1 class="mt-4">YOU ARE NOT ALONE AND IT'S OKAY TO NOT BE OKAY</h1> <br>
            <h5>silahkan curhat dan keluarin semuanya di sini ya, you deserve love</h5> <br><br>
            <div class="tombol-container">
                <button class="tombol"><b>CURHAT SEKARANG</b> </button></div> <br><br><br><br>
        </div> 
          <div class="kotak">
            <h1>Butuh teman untuk berbagi?</h1>
            <p>Saat dunia terasa berat, berbagi cerita adalah langkah pertama menuju penyembuhan. Di sini, kamu bisa curhat tanpa takut dihakimi, karena privasi kamu aman. Saatnya berbicara, Curhatkuy! adalah tempatmu untuk merasa didengar. </p>
            <button><b>TEMUKAN TEMAN</b> </button> 
          </div>
<footer>
    <p>&copy; Kelompok 8</p>
</footer>

</body>
</html>
