<?php
 try {
 // pada script dibawah new PDO adalah merupakan sebuah class yang didalamnya
//terdapat variabel $koneksi dan parameter yang dipakai pada database seperti nama database,
//tabel, username dan password.

 $koneksi = new PDO('mysql:host=localhost;dbname=belajar_oop', 'root', '',
array(PDO::ATTR_PERSISTENT => true));
 } catch (PDOException $e) {
 echo $e->getMessage();
 }
 // include_once digunakan untuk mengkoneksikan file ( KoneksiClass.php )
 // agar terkoneksi dengan database
 include_once 'KoneksiClass.php';
 // objek $user dibuat untuk memanggil class Auth dengan parameter $koneksi.
 $user = new Auth($koneksi);

 ?>