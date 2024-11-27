<?php
include 'connect.php';
include 'navbar.php';

if (isset($_POST['submit'])){
    $username = $_POST['nama'];
    $email = $_POST['email'];
    $password = password_hash($_POST['sandi'], PASSWORD_DEFAULT);

    $query = "INSERT INTO register_table(nama, email, sandi) VALUES ('$username', '$email', '$password')";

    if(mysqli_query($koneksi, $query)){
        header("Location: login.php");
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
    
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
</head>

<body>
    <div class="container" id="signup">
            <h1 class="form-title" style="text-align: center;">Sebelum curhat, bikin akun dulu yuk!</h1><br>
            <form method="post" action="">
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="nama" name="nama" id="nama" placeholder="nama samaran kamu" required>
                    <label for="email">nama samaran</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="email" name="email" id="email" placeholder="email kamu" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="sandi" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <input type="submit" class="btn" value="Sign Up" name="submit">
            </form>
            <p class="or">
                ----------or--------
            </p>
            <div class="icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
            </div>
            <div class="links">
                <p>Already Have an account?</p>
                <button id="signUpButton" onclick="window.location.href='login.php'">Sign In</button>
            </div>
        </div>
  </div>
    
    <footer class="text-center">
      <p>CURHATKUY</p>
      <p>by kelompok delapan</p>
    </footer>


  </body>

</html>