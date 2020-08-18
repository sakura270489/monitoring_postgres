<?php

session_start();

<<<<<<< HEAD
    $db_connection = pg_connect("host=172.18.1.94 dbname=mon user=postgres password=dba.surabaya@2020");
=======
    $db_connection = pg_connect("host=172.18.1.244 dbname=mon user=postgres password=singlepostgreswindow");
>>>>>>> 15ecdb1a6c78dcd0b3afd8fdd80e97284a334470

    $yr = "select nama_user, password_user from master_user where nama_user = '".$_GET["nama"]."' and password_user = '".$_GET["password"]."'";
    // echo $yr."<br>";
    $result = pg_query($db_connection, $yr);
    while ($hasil = pg_fetch_row($result)) {

        echo $hasil[0]."<br>".$hasil[1];


        if($hasil[0] == $_GET["nama"] && $hasil[1] == $_GET["password"]){

            // echo "<script type='text/javascript'>
            //         window.location.href = 'home.php?halaman=selamat_datang'
            //         </script>";

            echo "aaaaa";

        }else{

            // echo "<script type='text/javascript'>
            //             window.location.href = 'login.php'
            //         </script>";
            // echo "<script>document.location.href='login.php';</script>\n";
					// exit();

            echo "bbbbb";

        }
    }

?>