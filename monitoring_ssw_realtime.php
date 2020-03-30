<script type = "text/JavaScript">
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
      </script>
<?php
// $page = $_SERVER['home.php?halaman=monitoring_realtime'];
// $sec = "2";

	$db_connection = pg_connect("host=172.18.1.234 dbname=ssw user=postgres password=singlepostgreswindow");
	$db_insert = pg_connect("host=172.18.1.244 dbname=mon user=postgres password=singlepostgreswindow");
	
?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body onload = "JavaScript:AutoRefresh(2000);">
	<form name="form1" method="post" id="form1" >
	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="home.php?halaman=selamat_datang">Home</a>
							</li>

							<li>
								<a href="#">SSW</a>
							</li>
							<li class="active">Monitoring Realtime</li>
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
			<!-- <th class="detail-col">Action</th> -->
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
			<td><?php echo $output[0]; ?></td>
			<td><?php echo $output[1]; ?></td>
			<td><?php echo $output[2]; ?></td>
			<td><?php echo $output[8]; ?></td>
			<td><?php echo $output[3]; ?><br />
			<?php 
			$tr = "select nama from master_pengguna_ip where ip = '".$output[3]."' and db = 'ssw_234'";
			$yr = pg_query($db_insert, $tr);
            while ($sr = pg_fetch_row($yr)) {
                if($sr[0] != " "){
                	echo $sr[0];
            	}else{
					echo "";
				}
            }
			?>
			</td>
			<td><?php echo $output[4]; ?></td>
			<td><?php echo $output[5]; ?></td>
			<td><?php echo $output[9]; ?></td>
			<td><?php echo $output[11]; ?></td>
			<td><?php echo $output[7]; ?></td>
			<td><?php echo $output[10]; ?></td>
			<!-- <td><a href="delete_terminate.php?hapus=<?php echo $output[0]; ?>" class="btn btn-app btn-danger btn-sm"><i class="ace-icon fa fa-trash-o bigger-200"></i> Hapus</a></td> -->
		</tr>
	

<?php
    // }
		
	}
	
	pg_close($db_connection);

?>	

</table>
</body>
</form>
</html>