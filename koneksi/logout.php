<?php
session_start();
session_unset();
session_destroy();
header("Location: ../home.php"); // Redirect ke halaman beranda setelah logout
exit();
?>