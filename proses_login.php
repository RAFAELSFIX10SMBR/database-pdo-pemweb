<?php
session_start();
include 'koneksi.php';

$email    = $_POST['email'];
$password = $_POST['password'];

$sql   = "SELECT * FROM users WHERE email = '$email'";
$query = $db->query($sql);
$user  = $query->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user'] = $user;
    header("Location: profile.php");
    exit;
} else {
    echo "Login gagal. Email atau password salah. <a href='login.php'>Coba lagi</a>";
}
?>
