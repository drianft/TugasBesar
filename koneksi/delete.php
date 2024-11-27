<?php
session_start();
include 'connect.php';

// Dapatkan ID dari parameter URL
$id = $_GET['id'];

// Siapkan perintah SQL
$sql = "DELETE FROM register_table WHERE id = $id";

// Program akan mendelete lalu berpindah ke read.php
if(mysqli_query($koneksi, $sql)) {
    header("Location: read.php");
} else {
    echo "Error: " . mysqli_error($conn);
}


// Tutup statement dan koneksi
$stmt->close();
$koneksi->close();
?>
