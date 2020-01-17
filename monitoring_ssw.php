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
	<form name="form1" method="post" id="form1">
	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Tables</a>
							</li>
							<li class="active">Simple &amp; Dynamic</li>
						</ul><!-- /.breadcrumb -->
	</div>
	<div class="page-header">
							<h1>
								Monitoring SSW
							</h1>
						</div>
	<table border=1 id="simple-table" class="table  table-bordered table-hover">
	
		<tr>
			<th class="detail-col">PID</th>
			<th class="detail-col">Username</th>
			<th class="detail-col">Application Name</th>
			<th class="detail-col">Database</th>
			<th class="detail-col">Client </th>
			<th class="detail-col">Backend Start </th>
			<th class="detail-col">Query Start </th>
			<th class="detail-col">State Change </th>
			<th class="detail-col">State</th>
			<th class="detail-col">Query</th>
			<th class="detail-col">Time Per Milliseconds</th>
			<th class="detail-col">Action</th>
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
			<td><a href="delete_terminate.php?hapus=<?php echo $output[0];?>">hapus</a></td>
			<!-- <td><input class="btn btn-app btn-danger btn-sm" name="hapus[<?php echo $output[0];?>]" value="Delete" type="submit" id="hapus[<?php echo $output[0];?>]" /> -->
			</td>
		</tr>
	

<?php

	if(isset($_GET['hapus'])){
		$yr = "select pg_terminate_backend(pid), query from pg_stat_activity where pid = ".$_GET['hapus']." and state = 'idle' and datname = current_database()";
		echo $yr."<br>";
		// $te = pg_query($db_connection, $yr); 
		// $iu = pg_fetch_row($te);
		// pg_close($db_connection);
	}
		
	}
	
	pg_close($db_connection);

?>	

</table>
</body>
</form>
</html>