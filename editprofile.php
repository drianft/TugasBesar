<?php
session_start(); 
include "connect.php"; // Koneksi ke database
include "navbar.php"; // Tampilkan navbar


// Ambil data pengguna dari sesi
$userName = $_SESSION['user']; 
$email = $_SESSION['email'];


// Proses jika formulir disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Ambil data yang diubah dari form
    $new_name = $_POST['name'];
    $new_email = $_POST['email'];

    // Perbarui data pengguna di database
    $update_query = "UPDATE register_table SET nama = '$new_name', email = '$new_email'  WHERE email = '$email'";

    if (mysqli_query($koneksi, $update_query)) {
        // Jika berhasil, perbarui session dan tampilkan pesan sukses
        $_SESSION['nama'] = $new_name;
        $_SESSION['email'] = $new_email;
        
        header("Location: dasbor-user.php"); // Redirect ke halaman profil
        exit;
    } else {
        echo "<p class='error-message'>Terjadi kesalahan saat memperbarui data.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profil</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    h2 {
      text-align: center;
      color: #264b2c;
      margin-top: 40px;
    }

    form {
      width: 100%;
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      font-size: 16px;
      color: #333;
      margin-bottom: 10px;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 16px;
      box-sizing: border-box;
    }

    button[type="submit"] {
      width: 100%;
      padding: 12px;
      background-color: #f85c70;
      color: white;
      border: none;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #45a049;
    }

    .error-message {
      color: red;
      text-align: center;
      font-size: 18px;
      margin-bottom: 20px;
    }

    /* Responsif untuk layar kecil */
    @media (max-width: 768px) {
      form {
        padding: 15px;
      }

      h2 {
        font-size: 24px;
      }

      input[type="text"],
      input[type="email"] {
        font-size: 14px;
      }

      button[type="submit"] {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
  <h2>Edit Profil</h2>
  <form action="" method="post" enctype="multipart/form-data">
    <label for="name">Nama:</label>
    <input type="text" id="name" name="name" value="<?= htmlspecialchars($userName) ?>" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>" required><br>


    <button type="submit">Simpan Perubahan</button>
  </form>

  <script>
    const fileInput = document.getElementById('fileInput');
    const preview = document.getElementById('preview');

    fileInput.addEventListener('change', (event) => {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
          preview.src = e.target.result;
        };
        reader.readAsDataURL(file);
      }
    });
  </script>
</body>
</html>
