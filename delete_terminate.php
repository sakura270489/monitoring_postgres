<?php

if($_GET['id'] == "ssw"){
    $db_connection = pg_connect("host=172.18.1.234 dbname=ssw user=postgres password=singlepostgreswindow");
}else if($_GET['id'] == "esurat"){
    $db_connection = pg_connect("host=172.18.1.233 dbname=esuratmerdeka user=postgres password=!TakonAe.Juan");
}else if($_GET['id'] == "tekocak"){
    $db_connection = pg_connect("host=172.18.1.34 dbname=garbis_sby user=egov1 password=EGOVPASS");
}elseif($_GET['id'] == "gakin"){
    $db_connection = pg_connect("host=172.18.0.245 dbname=gakin user=postgres password=admin245");
}elseif($_GET['id'] == "bumil"){
    $db_connection = pg_connect("host=172.18.1.191 dbname=ebumil user=postgres password=dba.surabaya@2019");
}elseif($_GET['id'] == "monev"){
    $db_connection = pg_connect("host=172.18.0.50 dbname=monitoring user=postgres password=dba.Surabaya@2020");
}elseif($_GET['id'] == "wdh_44"){
    $db_connection = pg_connect("host=172.18.0.44 dbname=wdh_2020 user=postgres password=dba.surabaya@2020");
}elseif($_GET['id'] == "apel"){
    $db_connection = pg_connect("host=172.18.0.103 dbname=ppt user=postgres password=dba.surabaya@2020");
}

// $yr = "select pg_terminate_backend(pid), query from pg_stat_activity where pid = ".$_GET['hapus']." and state = 'idle'";
$yr = "select pg_terminate_backend(pid), query from pg_stat_activity where pid = ".$_GET['hapus']."";
// echo $yr."<br>";
// echo $db_connection;
$te = pg_query($db_connection, $yr); 
$iu = pg_fetch_row($te);
pg_close($db_connection);

// echo "<script>window.alert(\"Data Sudah di Hapus\");</script>";
// echo "sudah di delete terminate";
if($_GET['id'] == "ssw"){
	echo "<script>location.href='home.php?halaman=monitoring_ssw';</script>";
}else if($_GET['id'] == "tekocak"){
	echo "<script>location.href='home.php?halaman=monitoring_tekocak';</script>";
}else if($_GET['id'] == "esurat"){
	echo "<script>location.href='home.php?halaman=monitoring_esurat';</script>";
}else if($_GET['id'] == "gakin"){
	echo "<script>location.href='home.php?halaman=monitoring_gakin';</script>";
}else if($_GET['id'] == "bumil"){
	echo "<script>location.href='home.php?halaman=monitoring_bumil';</script>";
}else if($_GET['id'] == "monev"){
    echo "<script>location.href='home.php?halaman=monitoring_monev_50';</script>";
}else if($_GET['id'] == "wdh_44"){
    echo "<script>location.href='home.php?halaman=monitoring_wdh';</script>";
}else if($_GET['id'] == "apel"){
    echo "<script>location.href='home.php?halaman=monitoring_apel';</script>";
}

?>