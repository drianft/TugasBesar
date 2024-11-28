<?php
include "connect.php";
include "navbar.php";

session_start();

$namauser = $_SESSION['user'];
$query = mysqli_query($koneksi, "SELECT * FROM isicurhat WHERE namauser = '$namauser'" );
$cerita = isset($_GET['namauser']) ? $mysqli->real_escape_string($_GET['namauser']) : "";


$isLoggedIn = isset($_SESSION['user']);
$nama = $isLoggedIn ? $_SESSION['user'] : 'Guest';
$email = $isLoggedIn ? $_SESSION['email'] :'Guest@123.com';

$namasamaran = isset($_SESSION['nick']) ? $_SESSION['nick'] : '';

$result = mysqli_query($koneksi, "SELECT * FROM register_table WHERE email = '$email'");
$user = mysqli_fetch_assoc($result);

$nick = mysqli_query($koneksi, "SELECT * FROM register_table WHERE nama = '$namasamaran'");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER</title>
    <link rel="stylesheet" href="user.css"> 
    <style>
      .akun{
    border: 3px black;
    padding: 10px;
    background-color: plum;
    text-align: center;
    font-size: 90%px;
    margin-left: 300px;
    margin-right: 300px;
    height: 50px;
    border-radius: 10%;
    display: flex;
    justify-content: center;
    width: 60%;
}

.content{
    display: flex;
    justify-content: center;
    justify-content: space-around;
    grid-template-columns: 2fr 3fr;
    gap: 20px;
    width: 80%;
    margin: 60px;
     
}

.kiri{
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 40px;;

}

.kiri img{
  object-fit: cover;
  object-position: center;
  width: 150px;
  height: 150px;
  border-radius: 50%;
}

.kiri button{
    padding: 10px;
}


.kanan{
    background-color: rgb(234, 153, 235);
     text-align: left;
       padding: 70px;
       border-radius: 20px;
       width: 800px;
    }



footer{
    position: absolute;
    bottom: 0;
    padding: 2px 2px;
    text-align: center
}

@media (max-width: 768px) {
        .content{
          margin-top: 60px;
          
        }    
  
        .kanan{
             width: 400px;
            }
            /* .kiri { */

        }

.card{
    padding: 10px;
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.8);
}

    </style>
    <!-- link lalu tab -->
</head>
<body>
    <div class="content">
        <div class="kanan">
            <h5>Cerita Kamu</h5>
            <?php
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $namauser = htmlspecialchars($row['namauser'] ?? 'Anonymus');
                $isi = htmlspecialchars($row['isi'] ?? 'Tidak ada cerita');
                $genre = htmlspecialchars($row['genre'] ?? 'Tidak ada genre');

                // Batasi teks isi maksimal 200 karakter
                $isi = strlen($isi) > 200 ? substr($isi, 0, 200) . "..." : $isi;

                echo "<div class='card'>";
                echo "<h6>" . $namauser . "</h6>";
                echo "<p> Genre =  " . $genre . "</p>";
                echo "<p> : " . $isi . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>Tidak ada data tersedia.</p>";
        }
        
        // Tutup koneksi
        $koneksi->close();
        ?>
        </div>
        <div class="kiri">
            <h5><?php echo htmlspecialchars($nama);?></h5>
            <img src="foto profil.png" alt="foto pp">
            <h5><?php echo htmlspecialchars($email); ?></h5>
            <a href="editprofile.php">Edit Profile</a>
        </div>
    </div>
    <footer>
    <h5>CURHATKUY!</h5>
    <h5>by kelompok delapan</h5>
    </footer>
</body>
</html>