<?php

$db_connection = pg_connect("host=172.18.1.234 dbname=ssw user=postgres password=singlepostgreswindow");

$yr = "select pg_terminate_backend(pid), query from pg_stat_activity where pid = ".$_GET['hapus']." and state = 'idle'";
// echo $yr."<br>";
$te = pg_query($db_connection, $yr); 
$iu = pg_fetch_row($te);
pg_close($db_connection);

// echo "<script>window.alert(\"Data Sudah di Hapus\");</script>";
// echo "sudah di delete terminate";
echo "<script>location.href='home.php?halaman=monitoring_ssw';</script>";

?>