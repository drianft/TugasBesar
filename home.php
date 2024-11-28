<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "navbar.php";
include "connect.php";


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
    

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Parisienne&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
            
        }

        body {
            background-image: url(css/bghome.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 110vh;
        }

        
        
        
        .gambar-gerak {
            background-image: url(css/DALL·E\ 2024-11-06\ 21.44.27\ -\ An\ image\ representing\ mental\ health\ with\ a\ focus\ on\ emotional\ support\ and\ mindfulness.\ Show\ a\ peaceful\ room\ with\ a\ cozy\ chair\ and\ a\ person\ wrapped\ in\ .webp);
            padding: 50px;
            text-align: center;
            background-repeat: no-repeat;
            width: 100%;
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
        }

        .kotak {
            border : solid;
            width: 580px;
            height: auto;
            margin-left: 30px ;
            margin-top : 10px ;
            border-radius: 50px;
            padding: 20px;
            box-shadow: -5px 5px 1px 4px  rgb(1, 1, 1)  ;
        }

        

        .kotak h1{
            font-weight: bold;
            font-size: 30px;
            font-family: 'Parisienne', cursive;
        }


        .kotak a{
            text-decoration: none;
            color: white;
            background-color: #f85c70;
            border-radius: 30px;
            padding: 10px 20px;
            
        }
        footer{
            background-color: #f85c70;
            text-align: center;
            justify-content: center;
            padding: 3px;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
        }

        .tombol-dasbor{
            text-decoration: none;
            color: white;
            background-color: #f85c70;
            padding: 10px 20px;
            border-radius: 30px;
            border: solid;
            margin-bottom: 10px;
            position: absolute;
            right: 20px;
        }

        .logout-container{
            position: absolute;
            right: 20px;
            bottom: 60px;
        }

        .logout-container a{
            text-decoration: none;
            color: white;
            background-color: #f85c70;
            padding: 10px 20px;
            border-radius: 30px;
            border: solid;
            margin-bottom: 10px;
        }

        .tombol a{
            text-decoration: none;
            color : white;
            background-color: #f85c70;
            padding: 10px 20px;
            border-radius: 30px;
        }

        @media (max-width: 768px) {
            body {
                background-size: cover;
                background-position: left;
            }

            .gambar-gerak {
                background-position: center;
            }

            
        }

    </style>
</head>
<body>
    <div class="container-isi"><br>
        <div class="gambar-gerak">
            <h1>YOU ARE NOT ALONE AND IT'S OKAY TO NOT BE OKAY</h1> <br>
            <h5>Silahkan curhat dan keluarkan semuanya di sini, <?php echo htmlspecialchars($nama); ?>, you deserve love</h5> <br><br>
        
            
            <!-- Tombol "CURHAT SEKARANG" -->
            <div class="tombol">
            <?php if ($isLoggedIn): ?>
                <a href="curhat.php" class="tombol"><b>CURHAT SEKARANG</b></a>
            <?php else: ?>
                <a href="login.php" class="tombol" onclick="showLoginAlert()"><b>CURHAT SEKARANG</b></a>
            <?php endif; ?>
            </div>
        </div>
    </div>

        <div class="kotak">
        <h1>Butuh teman untuk berbagi?</h1>
        <p>Saat dunia terasa berat, berbagi cerita adalah langkah pertama menuju penyembuhan. Di sini, kamu bisa curhat tanpa takut dihakimi, karena privasi kamu aman. Saatnya berbicara, Curhatkuy! adalah tempatmu untuk merasa didengar.</p>
        
        <!-- Tombol "TEMUKAN TEMAN" -->
        <?php if ($isLoggedIn): ?>
            <a href="genre.php" class="tombol"><b>TEMUKAN TEMAN</b></a>
        <?php else: ?>
            <a href="login.php" class="tombol" onclick="showLoginAlert()"><b>TEMUKAN TEMAN</b></a>
        <?php endif; ?>
        </div>

    <!-- JavaScript untuk menampilkan alert -->
        <script>
        function showLoginAlert() {
            alert("Anda harus login untuk menggunakan fitur ini.");
        }
        </script>

   
    </div>
    <footer>
        <a href="dasbor-user.php" class="tombol-dasbor">Dasbor</a>
        <p>&copy; Kelompok 8</p>
         <!-- Tombol Logout -->
        <?php if ($isLoggedIn): ?>
            <div class="logout-container">
                <a href="koneksi/logout.php" class="tombol-logout">Logout</a>
            </div>
        <?php endif; ?>
    </footer>
</body>
</html>


