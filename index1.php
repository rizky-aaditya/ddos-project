<?php
  ob_start();
  session_start();
  if(isset($_SESSION['akun_username'])) header("location: index.php");
  include "config/config.php";
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AIR POLLUTION</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
     <link href="assets/css/aray.css" rel="stylesheet">


  </head> 

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=""></a>
          <img src="image/aray.png" width="150" height="80">
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="index1.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="controling.html">Controling</a></li>
            <li><a href="monitoring.html">Monitoring</a></li>
            <li><a href="maps.html">Maps</a></li>
            <li><a href="information.html">Information</a></li>
          	</ul>
            
           <ul class="nav navbar-nav navbar-right">
    	<li><a href="index.php">
    	<span class="glyphicon glyphicon-log-out" aria-hidden="true">&nbsp;</span></a></li></ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

<h1 class="jumbotron jumbotron-fluid" align="center" style="background-color: white">AIR POLLUTION INFORMATION AND FLOOD ALARM AT HOME RESIDENCE</h1>


<header>
    <div class="col-md-30" align="center">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>       
            </ol>
 
            <!-- deklarasi carousel -->
            <div class="carousel-inner" role="listbox">
                <div class="item active" >
                    <img src="img/coursel/polud.jpg" width="950px" height="1200">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="img/coursel/polud1.jpg" width="950px" height="1200">
                    <div class="carousel-caption">
                       
                    </div>
                </div>
                <div class="item">
                    <img src="img/coursel/polud2.jpg" width="950px" height="1200">
                    <div class="carousel-caption">
                       
                    </div>
                </div>  
                <div class="item">
                    <img src="img/coursel/polud3.png" width="950px" height="1200">
                    <div class="carousel-caption">
                       
                    </div>
                </div>            
            </div>
 
 
            <!-- membuat panah next dan previous -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </header>

<br> <br> <br><br>
<footer class="footer">
    <p align="center">&copy;&nbsp;COPYRIGHT 2020 - ARAY</p>
  </footer>
      <div id="page-wrapper">

  
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    
  </body>
</html>

<?php
mysqli_close($koneksi);
ob_end_flush();
?>

