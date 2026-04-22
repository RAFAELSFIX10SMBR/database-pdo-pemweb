<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profil User</title>
</head>
<body>
    <h2>Profil User</h2>

    <p><strong>ID:</strong> <?= $user['id']; ?></p>
    <p><strong>Nama:</strong> <?= $user['name']; ?></p>
    <p><strong>Email:</strong> <?= $user['email']; ?></p>
    <p><strong>Biografi:</strong> <?= $user['bio']; ?></p>

    <a href="edit_profil.php">Edit Profil</a> |
    <a href="daftar_user.php">Daftar User</a> |
    <a href="logout.php">Logout</a>
</body>
</html>
