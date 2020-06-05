<?php
   session_start();
   include 'connect.php';
   $email = $_POST['email'];
   $password = $_POST['password'];   
   $sql = "SELECT * FROM tb_daftaruser WHERE email = '$email'";
   $query = $koneksi->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Email Belum Terdaftar! <a href='formuser.html'>Back</a></div>";
   } else {
     if($password <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='formuser.html'>Back</a></div>";
     } else {
       $_SESSION['email'] = $hasil['email'];
       header('location:berhasil.php');
     }
   }
?>