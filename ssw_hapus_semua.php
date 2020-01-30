<?php

	if($_GET['hapus'] == "ssw"){

		$db_connection = pg_connect("host=172.18.1.234 dbname=ssw user=postgres password=singlepostgreswindow");
	
	}else if($_GET['hapus'] == "esurat"){
		$db_connection = pg_connect("host=172.18.1.233 dbname=esuratmerdeka user=postgres password=!TakonAe.Juan");
	}else if($_GET['hapus'] == "tekocak"){
		$db_connection = pg_connect("host=172.18.1.34 dbname=garbis_sby user=egov1 password=EGOVPASS");
	}


    $df = "select pid, usename, application_name, client_addr, backend_start, query_start, wait_event_type, query, datname, state_change, (state_change - backend_start) as time_per_milliseconds, state from pg_stat_activity where query != ''";
    // echo $df."<br>";
    $result = pg_query($db_connection, $df);
    while($output = pg_fetch_row($result)){
	
		// $current_time = new DateTime($output[9]);
		$current_time = new DateTime(date("Y-m-d H:i:s"));
		$passed_time = new DateTime($output[4]);
		$interval = $current_time->diff($passed_time);
		$diff1 = $interval->format("%i%");
		$diff2 = $interval->format("%H%");
		$diff = ($diff2*60)+$diff1;
		$now= date("Y-m-d H:i:s");

		if($diff > 30 && $output[3] != "172.18.0.208"){
		 // echo $output[0]."<br>".$output[3]."--ip<br>".$output[4]."--backend<br>".$now."--sekarang<br>".$output[9]."--state<br>".$diff."--diff<br>";
		 
			// $yr = "SELECT pg_terminate_backend(pg_stat_activity.pid) FROM pg_stat_activity WHERE datname = current_database() or pid <> pg_backend_pid()";
			
			// $yr = "SELECT pg_cancel_backend(".$output[0].")";
			$yr = "select pg_terminate_backend(pid), query, pid from pg_stat_activity where pid = ".$output[0]." and state = 'idle'";
			// echo $yr."<br>";
			$te = pg_query($db_connection, $yr); 
			$iu = pg_fetch_row($te);
			
			// $ur = "select * from pg_reload_conf()";
			/* $gs = pg_query($db_connection, $ur);
			$sr = pg_fetch_row($gs); */
			
            // echo $iu[0]."<br>".$iu[1]."<br>".$iu[2]."<br>";
            
            echo "<script>location.href='home.php?halaman=monitoring_ssw';</script>";
			
		}
	
	}
	
	pg_close($db_connection);
	
?>

<!-- jika pid > 30 menit maka
select pg_cancel_backend(pid)-->