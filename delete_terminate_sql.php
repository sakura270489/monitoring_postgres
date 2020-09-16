<?php

    if ($_GET['id'] == "db_sql40") {
        $servername = "172.18.0.40";
        // $database = "u266072517_name";
        $username = "monitoring_sql";
        $password = "monitoring_sql@2020";
    }else if($_GET['id'] == "db_sql85"){
        $servername = "172.18.0.85";
        // $database = "u266072517_name";
        $username = "monitoring_sql";
        $password = "monitoring_sql_2020";
    }
    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $id = $_GET['hapus'];

    $query = "kill ".$id."";
    echo $query;
    $result = mysqli_query($conn, $query);

    // mysql_query("kill ".$id."")or die(mysql_error());

    mysqli_close($conn);

    echo "<script>location.href='home.php?halaman=sql_85';</script>";

?>