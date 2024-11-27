<?php
include "../navbar.php";
include "../connect.php";

// Pastikan koneksi berhasil

// Mendapatkan genre dari parameter GET
$genre = isset($_GET['genre']) ? $koneksi->real_escape_string($_GET['genre']) : "";

// Query untuk mendapatkan data film berdasarkan genre
$query = "SELECT * FROM isicurhat WHERE genre = '$genre'";
$result = $koneksi->query($query);
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
<h1>Film Genre: <?= htmlspecialchars($genre) ?></h1>
    <?php if ($result && $result->num_rows > 0): ?>
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= htmlspecialchars($row['namauser']) ?></td>
                        <td><?= htmlspecialchars($row['isi']) ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Tidak ada film dengan genre <?= htmlspecialchars($genre) ?>.</p>
    <?php endif; ?>
    <br>
    <a href="pilih_genre.php">Pilih Genre Lain</a>
    <!-- <div class="container">
        <div class="kiri">
            <img src="gambarGenre.png">
            <h2><?= htmlspecialchars($genre) ?></h2>
        <footer>
            <p>Curhatkuy!</p>
            <p>by kelompok delapan</p>
        </footer>
        </div>

        <div class="kanan">
        <?php
        // Loop untuk menampilkan data dari database
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='card'>";
                echo "<h3> " . htmlspecialchars($row['namauser'] ?? 'Anonymus') . "</h3>";
                echo "<p>: " . htmlspecialchars($row['isi'] ?? 'Tidak ada cerita') . "</p>";
                echo "</div>";
            }
        $koneksi->close();
            echo "<p>Tidak ada data tersedia.</p>";
        }

        // Tutup koneksi
        $koneksi->close();
        ?>
        </div>
    </div> -->
</body>
</html>