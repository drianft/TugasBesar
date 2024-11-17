<?php
include 'connect.php';
include 'navbar.php';

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO register_table (username, email, password) VALUES ('$username', '$email', '$password')";
    if (mysqli_query($koneksi, $query)) {
        header("Location: read.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="regis.css">
</head>
<body>
    <div class="container">
        <form action="read.php" method="post"></form>
                <h3>Tambahkan akun baru</h3>
                <br>
                <a href="read.php"> Balik nih!</a>
                <br><br>
                <form action="" method="POST">
                <br>
                <input type="text" id="nama" placeholder="nama samaran kamu">
                <br>
                <input type="text" id="email" placeholder="email kamu">
                <br>
                <input type="text" id="password" placeholder="password kamu">
                <br>
                <p>udh pas isi akunnnya?</p>
                <br>
            
            <button type="submit" class="tombol">kirim</button>
        </form> 
    </div>
</body>
</html>