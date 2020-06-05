

<?php
  ob_start();
  session_start();
  if(isset($_SESSION['akun_username'])) header("location: index.php");
  include "config/config.php";


  if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql_login = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '$username' AND password = '$password'");
      if(mysqli_num_rows($sql_login)>0) {
        $row_login = mysqli_fetch_array($sql_login);
        $_SESSION['login_id'] = $row_login['id'];
        $_SESSION['login_username'] = $row_login['username'];
        header("location:/ArayTubes/index1.php");
      } else {
        header("location:index.php?login-gagal");

      }
  }
?>
<DOCTYPE html>
 <html lang="en">
  <head>
    <title> Form Login  </title>
    <link href="assets/css/style1.css" rel="stylesheet" type="text/css" >
  </head>

  <body>
    <div id="utama">

      <div class="header">

        <div class="header_isi">

          <div class="gambar">

            <form action="?page=index" method="POST">
              <img src="image/logo.png" ><br /><br />

              <input type="text" name="username" placeholder="Username" class="login_regis">     <br />
              <input type="password" name="password" placeholder="Password" class="login_regis"> <br />

            <div class="chexbox">
              <input type="checkbox" name="chek" > Remember me <br />
            </div>
               <?php
            if(isset($_GET['login-gagal'])){?>
            <tr>
              <td>
                <div>
                <p>Maaf, Username atau Password yang Anda masukkan salah</p>
                </div>
              </td>
            </tr>
          <?php }?>

              <input type="Submit" name="login" value="LOGIN" class="tombol_login" <a href="index1.php"></a>
            </form>

          </div>
        </div>
      </div>
    </div>


      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>

  </body>
</html>