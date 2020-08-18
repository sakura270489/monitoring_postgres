<script type = "text/JavaScript">
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
      </script>

<?php
// $page = $_SERVER['PHP_SELF'];
// $sec = "2";

// session_start();

$servername = "172.18.0.85";
// $database = "u266072517_name";
$username = "monitoring_sql";
$password = "monitoring_sql_2020";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

 
	
?>

<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
<body onload = "JavaScript:AutoRefresh(2000);">
	<form name="form1" method="post" id="form1">
	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="home.php?halaman=selamat_datang">Home</a>
							</li>

							<li>
								<a href="#">DB SQL 85</a>
							</li>
							<li class="active">Monitoring Aktifitas</li>
						</ul><!-- /.breadcrumb -->
	</div>
	<div class="page-header">
		<h1>
			Monitoring DB SQL 85
		</h1>
	</div>
	<p>&nbsp;</p>
	<table border=1 id="simple-table" class="table  table-bordered table-hover">
	
		<tr>
			<th class="detail-col">PID</th>
			<th class="detail-col">Username</th>
			<th class="detail-col">Host Client</th>
			<th class="detail-col">Database</th>
			<th class="detail-col">Command </th>
			<th class="detail-col">Time </th>
			<th class="detail-col">State</th>
			<th class="detail-col">Info</th>
		</tr>
		

<?php	
	// $df = "select pid, usename, application_name, client_addr, backend_start, query_start, wait_event_type, query, datname, state_change, (EXTRACT(milliseconds FROM state_change - backend_start)) as time_per_milliseconds from pg_stat_activity where query != ''";
	$df = "select * from information_schema.processlist order by db asc";
	// echo $df."<br>";
	$result = mysqli_query($conn, $df);
	while($output = mysqli_fetch_array($result)){
		// echo $output[0];
?>
<?php
    $output[7] = mysqli_real_escape_string($output['INFO']);
    
    $mil = $output['TIME'];
    $seconds = ceil($mil / 1000);

?>
		<tr>
			<td><?php echo $output['ID'];?></td>
			<td><?php echo $output['USER'];?></td>
			<td><?php echo $output['HOST'];?></td>
			<td><?php echo $output['DB'];?></td>
			<td><?php echo $output['COMMAND'];?></td>
			<td><?php echo $output['TIME'];?></td>
			<td><?php echo $output['STATE'];?></td>
			<td><?php echo $output[7];?></td>
			
		</tr>
	

<?php
		
	}
	
    // pg_close($db_connection);
    mysqli_close($conn);

?>	

</table>
</form>
