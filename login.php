<?php
// Lampirkan dbconfig
require_once "dbconfig.php";
// Cek status login user
if ($user->isLoggedIn()) {
 header("location: index.php"); //redirect ke index
}
//jika ada data yg dikirim
if (isset($_POST['kirim'])) {
 $email = $_POST['email'];
 $password = $_POST['password'];
 // Proses login user
 if ($user->login($email, $password)) {
 // lokasi tujuan setelah berhasil login dengan benar
 header("location: index.php");
 } else {
 // Jika login gagal, ambil pesan error
 $error = $user->getLastError();
 }
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Login</title>
 <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
 <div class="login-page">
 <div class="form">
 <form class="login-form" method="post">
 <?php if (isset($error)) : ?>
 <div class="error">
 <?php echo $error ?>
 </div>
 <?php endif; ?>
 <input type="email" name="email" placeholder="Masukkan email" required />
 <input type="password" name="password" placeholder="Masukkan password"
required />
 <button type="submit" name="kirim">login</button>
 <h4>Belum Terdaftar <a href="daftar.php">Silahkan Daftar</a></h4>
 </form>
 </div>
 </div>
</body>