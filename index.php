<?php
 // Lampirkan dbconfig
 require_once "dbconfig.php";
 // Cek status login user
 if(!$user->isLoggedIn()){
 header("location: login.php"); //Redirect ke halaman login
 }
 // Ambil data user saat ini
 $currentUser = $user->getUser();
 ?>
<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 <title>Home</title>
 <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
 </head>
 <body>
 <div class="container">
 <div class="info">
 <h1>Selamat Datang <?php echo $currentUser['id'] ?></h1>
 <hr>
 <a href="logout.php"><button type="button">Logout</button></a>
 </div>

 </div>
 </body>
</html>