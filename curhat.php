<?php
include "navbar.php";
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $genre = $_POST['genre'];
    $deskripsi = $_POST['isi'];

    // Validasi data
    if (!empty($nama) && !empty($genre) && !empty($deskripsi)) {
        // Simpan data ke database
        $query = "INSERT INTO isicurhat (namauser, genre, isi) VALUES ('$nama', '$genre', '$deskripsi')";
        if ($koneksi->query($query) === TRUE) {
            $success_message = "Ceritamu berhasil ditambahkan!";
            header("Location: home.php");
            exit();
        } else {
            $error_message = "Gagal menambahkan Cerita: " . $koneksi->error;
        }
    } else {
        $error_message = "Semua bidang harus diisi!";
    }
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curhatkuy!</title>
<style>

    body {
        background-color: #fad4d4;
    }
    /* Container utama */
.container {
    margin-top: 40px;
    display: flex;
    padding: 20px;
    gap: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 1200px;
}

/* Bagian kiri (teks informasi) */
.left {
    flex: 1;
    font-family: Arial, sans-serif;
    color: #333;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.left h1 {
    font-size: 24px;
    color: #333;
    margin-bottom: 10px;
}

.left p {
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 15px;
}

.left blockquote {
    font-style: italic;
    color: #555;
    margin: 20px 0;
    border-left: 4px solid #ddd;
    padding-left: 10px;
}

/* Bagian kanan (formulir) */
.right {
    flex: 1;
    background-color: #ffeaea;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

form input,
form select,
form textarea {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

form button {
    padding: 10px;
    font-size: 16px;
    color: white;
    background-color: #007BFF;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

form button:hover {
    background-color: #0056b3;
}

</style>

    
</head>
<body>
<div class="container">
    <div class="left">
        <h1>Kamu boleh curhat di sini</h1>
        <p>SILAHKAN TUANG PERASAAN KAMU DI SINI, JANGAN TAKUT UNTUK BEREKSPRESI DAN MENGELUARKAN SEMUANYA, YA!</p>
        <p>Dengan mengirimkan curhatan berikut, kamu memberikan hak kepada curhatkuy! untuk mem-publish curhatan ini di website curhatkuy!, tentunya dengan menyamarkan nama kamu. Dengan membagikan curhatan kamu, kamu akan mendapatkan masukan yang mungkin berguna dari orang lain di luar sana.</p>
        <blockquote>"You have to get lost before you find yourself." - Paper Town -</blockquote>
        <p><strong>Curhatkuy!</strong><br>by kelompok delapan</p>
    </div>
    <div class="right">
        <form method="POST" action="">
            <input type="text" name="nama" placeholder="Nama Samaran Kamu" required />
            <select name="genre" required>
                <option value="" disabled selected>Pilih Genre</option>
                <option value="toxic-friend">Toxic Friend</option>
                <option value="bad-partner">Bad Partner</option>
                <option value="broken-home">Broken Home</option>
                <option value="insecurity">Insecurity</option>
                <option value="academic-pressure">Academic Presure</option>
                <option value="Loneliness">Loneliness</option>
            </select>
            <textarea name="isi" placeholder="Curhatan Kamu" rows="5" required></textarea>
            <button type="submit">Kirim</button>
        </form>
    </div>
</div>
</body>
</html>
<?php
if (isset($success_message)) {
    echo "<script>
        alert('$success_message');
        window.location.href = 'cerita.php?genre=$genre';
    </script>";
} elseif (isset($error_message)) {
    echo "<script>
        alert('$error_message');
    </script>";
}
?>