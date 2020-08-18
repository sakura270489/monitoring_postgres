<?php

session_start();

$db_connection = pg_connect("host=172.18.1.94 dbname=mon user=postgres password=dba.surabaya@2020");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Monitoring Database Postgres</title>

  <!-- Favicons -->
  <link href="img/500_F_125712670_cXZJuMoaei6pxIzWZnqqbDC1WA3DpQ9H.jpg" rel="icon">
  <!-- <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <!-- <form class="form-login" action="login_query.php" method="GET"> -->
      <form class="form-login" method="POST">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input name="nama" id="nama" type="text" class="form-control" placeholder="User ID" autofocus>
          <br>
          <input name="password" id="password" type="password" class="form-control" placeholder="Password">
          <br>
          <input class="btn btn-theme btn-block" type="submit" value="SIGN IN" name="login">
          <hr>
        </div>
      </form>
    </div>
  </div>

<?php

    if ($_POST["login"]) {
        $yr = "select nama_user, password_user, level from master_user where nama_user = '".$_POST["nama"]."' and password_user = '".$_POST["password"]."'";
        // echo $yr."<br>";
        $result = pg_query($db_connection, $yr);
        while ($hasil = pg_fetch_row($result)) {
            //echo $hasil[0]."<br>".$hasil[1];


            if ($hasil[0] == $_POST["nama"] && $hasil[1] == $_POST["password"]) {

                $_SESSION['nama'] = $hasil[0];
                $_SESSION['level'] = $hasil[2];
                $_SESSION["last_login_time"] = time();

                // echo $_SESSION['level'];
             echo "<script type='text/javascript'>
                        window.location.href = 'home.php?halaman=selamat_datang'
                        </script>";

                // echo "aaaaa";
            // } else {

           /*  echo "<script type='text/javascript'>
                            window.location.href = 'login.php'
                        </script>"; */
                // echo "<script>document.location.href='login.php';</script>\n";
                // exit();

                // echo "bbbbb";
            }
        }
    }

?>

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/database-connections-freebase-ss-1920_r6vaok.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
