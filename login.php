<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Form Login</h2>

    <?php if (isset($_GET['error'])): ?>
        <p><strong><?= $_GET['error'] ?></strong></p>
    <?php endif; ?>

    <form action="proses_login.php" method="POST">
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>

    <p>Belum punya akun? <a href="register.php">Register di sini</a></p>
</body>
</html>
