<?php
// $page = $_SERVER['PHP_SELF'];
// $sec = "2";

$db_connection = pg_connect("host=172.18.1.233 dbname=esuratmerdeka user=postgres password=!TakonAe.Juan");
	// $db_insert = pg_connect("host=172.18.1.244 dbname=mon user=postgres password=singlepostgreswindow");
	
?>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
	<form name="form1" method="post" id="form1">
	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="home.php?halaman=selamat_datang">Home</a>
							</li>

							<li>
								<a href="#">Esurat</a>
							</li>
							<li class="active">Monitoring User</li>
						</ul><!-- /.breadcrumb -->
	</div>
	<div class="page-header">
		<h1>
			Monitoring User Esurat
		</h1>
	</div>

	<table border=1 id="simple-table" class="table  table-bordered table-hover">
	
		<tr>
			<th class="detail-col">Username</th>
			<th class="detail-col">Nama Schema</th>
			<th class="detail-col">Privileges</th>
		</tr>
		

<?php	
	// $df = "select pid, usename, application_name, client_addr, backend_start, query_start, wait_event_type, query, datname, state_change, (EXTRACT(milliseconds FROM state_change - backend_start)) as time_per_milliseconds from pg_stat_activity where query != ''";
	$df = "SELECT grantee as user, privilege_type as privileges, table_schema as schema_name FROM information_schema.role_table_grants WHERE 1=1 and grantee not in ('PUBLIC') group by grantee, privilege_type, table_schema order by grantee asc";
	// echo $df."<br>";
	$result = pg_query($db_connection, $df);
	while($output = pg_fetch_row($result)){
		// echo $output[0];
?>
		<tr>
			<td><?php echo $output[0];?></td>
			<td><?php echo $output[2];?></td>
			<td><?php echo $output[1];?></td>
		</tr>
	

<?php
		
	}
	
	pg_close($db_connection);

?>	

</table>
</form>