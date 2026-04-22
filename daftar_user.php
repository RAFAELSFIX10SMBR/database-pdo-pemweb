<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

include 'koneksi.php';

$sql   = "SELECT * FROM users";
$query = $db->query($sql);
$rows  = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar User</title>
</head>
<body>
    <h2>Daftar User</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Biografi</th>
        </tr>
        <?php foreach ($rows as $row): ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['bio']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <br>
    <a href="profile.php">Profil Saya</a> |
    <a href="logout.php">Logout</a>
</body>
</html>
