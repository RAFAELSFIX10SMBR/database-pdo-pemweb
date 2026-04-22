<?php
include 'koneksi.php';

$name     = $_POST['name'];
$email    = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$bio      = $_POST['bio'];

$sql = "INSERT INTO users (name, email, password, bio) VALUES ('$name', '$email', '$password', '$bio')";
$db->exec($sql);

echo "Registrasi berhasil. <a href='login.php'>Login sekarang</a>";
?>
