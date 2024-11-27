<?php
include "../connect.php";
include "../navbar.php";

$result = mysqli_query($koneksi, "SELECT * FROM register_table");
$query = mysqli_query($koneksi, "SELECT * FROM isicurhat");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Para Curhaterzz</title>
    </head>
<body>
    <div class="container">
        <h3>Daftar Curhaterzz</h3>
        <br>
        <a href="regis.php" class="btn btn-primary">Tambahkan Akun</a>
        <br><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>nama samaran</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php while ($crht = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $crht["nama"]; ?></td>
                    <td><?= $crht["email"];?></td>
                    <td><?= $crht["sandi"];?></td>
                    <td>
                        <a href="update.php?id=<?= $crht['id']; ?>" class="btn btn-info">Update</a> |
                        <a href="delete.php?id=<?= $crht['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin menghapus?')">Delete</a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endwhile; ?>
            </tbody>
        </table>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>nama samaran</th>
                    <th>genre</th>
                    <th>cerita</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php while ($crht = mysqli_fetch_assoc($query)) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $crht["namauser"]; ?></td>
                    <td><?= $crht["genre"];?></td>
                    <td><?= $crht["isi"];?></td>
                    <td>
                        <a href="update.php?id=<?= $crht['id']; ?>" class="btn btn-info">Update</a> |
                        <a href="delete.php?id=<?= $crht['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin menghapus?')">Delete</a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php mysqli_close($koneksi); ?>