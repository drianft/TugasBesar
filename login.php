<?php
session_start();
include "connect.php";
include "navbar.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $sandi = $_POST['sandi'];

    // Mencari pengguna berdasarkan email
    $result = mysqli_query($koneksi, "SELECT * FROM register_table WHERE email = '$email'");
    $user = mysqli_fetch_assoc($result);

    // Cek apakah pengguna ditemukan
    if ($user && password_verify($sandi, $user['sandi'])) {
        $_SESSION['user'] = $user['nama'];
        header("Location: home.php"); // Berhasil login, pindah ke halaman utama
    } else {
        $error = "Password salah.";
    } 
} else {
    $error = "Pengguna tidak ditemukan. Cek kembali email yang Anda masukkan.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
    </head>

<body>
        <div class="container" id="signIn">
            <h1 class="form-title" style="text-align: center;">login akun kamu dulu yuk!</h1><br>
            <form method="post" action="">
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="sandi" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    <?php if (isset($error)) {
                    echo "<p style='color:red; text-align:center;'>$error</p>";
                    }?>
    
                </div>
                <p class="recover">
                    <a href="#">Recover Password</a>
                </p>
                <input type="submit" class="btn" value="Sign In" name="signIn">
            </form>
            <p class="or">
                ----------or--------
            </p>
            <div class="icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
            </div>
            <div class="links">
                <p>Don't have account yet?</p>
                <button id="signUpButton" onclick="window.location.href='regis.php'">Sign Up</button>
            </div>
        </div>
</body>
<script></script>
</html>

