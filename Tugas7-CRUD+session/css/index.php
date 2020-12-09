<?php session_start(); ?>
<html>
  <head>
    <title>Pemrograman Web Dinamis</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sign.css">

  </head>
  <body>
    <div class="container">

      <form class="form-signin" action="validasi.php" method="POST">
        <center><img src="img/photo.jpg" alt="..." class="img-rounded" width="140px"></center>
        <center><h3 class="form-signin-heading">Login</h3></center>
        <input class="form-control" placeholder="Username" autofocus="" type="text" required autofocus>
        <input class="form-control" placeholder="Password" type="password" required autofokus>
        <?php
          // menampilkan validasi jika username atau password salah
          if(isset($_SESSION['pesan'])){
            echo $_SESSION['pesan'];
            unset($_SESSION['pesan']);
          }
          else{
          // apabila login gagal lanjut tampilkan form login
          }
          ?>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
 
 <!--fotter-->
         <div class="footer">
            <center><p>&copy; Pemrograman Web Dinamis 2013</p></center>
          </div>

  </body>
  </html>