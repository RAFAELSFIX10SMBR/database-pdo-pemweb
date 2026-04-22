<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

include 'koneksi.php';

$id   = $_SESSION['user']['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$bio  = $_POST['bio'];

if (!empty($_POST['password'])) {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sql = "UPDATE users SET name='$name', email='$email', bio='$bio', password='$password' WHERE id=$id";
} else {
    $sql = "UPDATE users SET name='$name', email='$email', bio='$bio' WHERE id=$id";
}

$db->exec($sql);

$sql_user = "SELECT * FROM users WHERE id = $id";
$query    = $db->query($sql_user);
$user     = $query->fetch(PDO::FETCH_ASSOC);

$_SESSION['user'] = $user;

header("Location: edit_profil.php?pesan=Profil berhasil diperbarui");
exit;
?>
