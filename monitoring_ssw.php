<?php
// $page = $_SERVER['PHP_SELF'];
// $sec = "2";

	$db_connection = pg_connect("host=172.18.1.234 dbname=ssw user=postgres password=singlepostgreswindow");
	$db_insert = pg_connect("host=172.18.1.244 dbname=mon user=postgres password=singlepostgreswindow");
	
?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
	<table border=1>
	
		<tr>
			<td>PID</td>
			<td>Username</td>
			<td>Application Name</td>
			<td>Database</td>
			<td>Client </td>
			<td>Backend Start </td>
			<td>Query Start </td>
			<td>State Change </td>
			<td>State</td>
			<td>Query</td>
			<td>Time Per Milliseconds</td>
		</tr>
		

<?php	
	// $df = "select pid, usename, application_name, client_addr, backend_start, query_start, wait_event_type, query, datname, state_change, (EXTRACT(milliseconds FROM state_change - backend_start)) as time_per_milliseconds from pg_stat_activity where query != ''";
	$df = "select pid, usename, application_name, client_addr, backend_start, query_start, wait_event_type, query, datname, state_change, (state_change - backend_start) as time_per_milliseconds, state from pg_stat_activity where query != ''";
	// echo $df."<br>";
	$result = pg_query($db_connection, $df);
	while($output = pg_fetch_row($result)){
		// echo $output[0];
?>
<?php
	$output[7] = pg_escape_string($output[7]);
?>
		<tr>
			<td><?php echo $output[0];?></td>
			<td><?php echo $output[1];?></td>
			<td><?php echo $output[2];?></td>
			<td><?php echo $output[8];?></td>
			<td><?php echo $output[3];?></td>
			<td><?php echo $output[4];?></td>
			<td><?php echo $output[5];?></td>
			<td><?php echo $output[9];?></td>
			<td><?php echo $output[11];?></td>
			<td><?php echo $output[7];?></td>
			<td><?php echo $output[10];?></td>
		</tr>
	


<?php

	/*$ir = "insert into mon_ssw (pid, database, username, client_addr, backend_start, wait_event_type, query, application_name, query_start, state_change) values ('".$output[0]."', '".$output[8]."', '".$output[1]."', '".$output[3]."', '".$output[4]."', '".$output[6]."', '".$output[7]."', '".$output[2]."', '".$output[5]."', '".$output[9]."')";
	// echo $ir."<br>";
	// var_dump($ir);
	$resulti = pg_query($db_insert, $ir);*/
		
	}
	
	pg_close($db_connection);

?>	

</table>
</body>
</html>