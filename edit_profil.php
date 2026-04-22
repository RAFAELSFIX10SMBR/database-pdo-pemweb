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
    <title>Edit Profil</title>
</head>
<body>
    <h2>Edit Profil</h2>

    <?php if (isset($_GET['pesan'])): ?>
        <p><strong><?= $_GET['pesan'] ?></strong></p>
    <?php endif; ?>

    <form action="proses_edit_profil.php" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="name" value="<?= $user['name']; ?>" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?= $user['email']; ?>" required><br><br>

        <label>Biografi:</label><br>
        <textarea name="bio" rows="4" cols="40"><?= $user['bio']; ?></textarea><br><br>

        <label>Password Baru (kosongkan jika tidak ingin mengubah):</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit">Simpan</button>
    </form>

    <p><a href="profile.php">Kembali ke Profil</a></p>
</body>
</html>
