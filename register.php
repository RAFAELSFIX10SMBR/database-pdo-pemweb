<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Form Register</h2>

    <?php if (isset($_GET['error'])): ?>
        <p><strong><?= $_GET['error'] ?></strong></p>
    <?php endif; ?>

    <form action="proses_register.php" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label>Biografi:</label><br>
        <textarea name="bio" rows="4" cols="40"></textarea><br><br>

        <button type="submit">Daftar</button>
    </form>

    <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
</body>
</html>
