<?php
include "navbar.php";
include "../connect.php";

$query = mysqli_query($koneksi, "SELECT * FROM isicurhat WHERE genre = 'academic-pressure'" );
$genre = isset($_GET['genre']) ? $mysqli->real_escape_string($_GET['genre']) : "";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>genre</title>
    <link rel="stylesheet" href="">
    <style>
        body{
    background-color: #fad4d4;
}
.container {
    display: flex;
    flex-direction: row;
    gap: 20px;
    padding: 20px;
    height: 80vh; /* Tinggi tetap konsisten */
    width: 100%;
}

.kiri {
    background-color: whitesmoke;
    flex: 1; /* Kolom kiri lebih kecil */
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

footer {
    margin-top: auto;
    white-space: normal;
    word-wrap: break-word;
}

.kanan {
    flex: 2; /* Kolom kanan lebih besar */
    display: flex;
    flex-direction: column;
    gap: 20px;
    padding: 20px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    height: 100%; /* Tinggi penuh mengikuti container */
    overflow-y: auto ;
}

.card {
    padding: 15px;
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}


    </style>
</head>
<body>
    <div class="container">
        <div class="kiri">
            <img src="gambarGenre.png">
            <h2>Academic Pressure</h2>
        <footer>
            <p>Curhatkuy!</p>
            <p>by kelompok delapan</p>
        </footer>
        </div>

        <div class="kanan">
        <?php
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $namauser = htmlspecialchars($row['namauser'] ?? 'Anonymus');
                $isi = htmlspecialchars($row['isi'] ?? 'Tidak ada cerita');

                // Batasi teks isi maksimal 200 karakter
                $isi = strlen($isi) > 200 ? substr($isi, 0, 200) . "..." : $isi;

                echo "<div class='card'>";
                echo "<h6>" . $namauser . "</h6>";
                echo "<p>: " . $isi . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>Tidak ada data tersedia.</p>";
        }
        
        // Tutup koneksi
        $koneksi->close();
        ?>
        </div>
    </div>
</body>
</html>