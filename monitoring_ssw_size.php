<?php

    $db_connection = pg_connect("host=172.18.1.234 dbname=ssw user=postgres password=singlepostgreswindow");

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
								<a href="home.php?halaman=selamat_datang">Home</a>
							</li>

							<li>
								<a href="#">SSW</a>
							</li>
							<li class="active">Monitoring Size</li>
						</ul><!-- /.breadcrumb -->
	</div>
	<div class="page-header">
        <h1>
            Monitoring SSW
        </h1>
    </div>
	<table border=1 id="simple-table" class="table  table-bordered table-hover">
	
		<tr>
			<th class="detail-col">OID</th>
			<th class="detail-col">Table Schema</th>
			<th class="detail-col">Table Name</th>
			<th class="detail-col">Total</th>
			<th class="detail-col">Index </th>
			<th class="detail-col">Table </th>
		</tr>

<?php

    $it = "SELECT *, pg_size_pretty(total_bytes) AS total, pg_size_pretty(index_bytes) AS INDEX, pg_size_pretty(toast_bytes) AS toast, pg_size_pretty(table_bytes) AS TABLE FROM (SELECT *, total_bytes-index_bytes-COALESCE(toast_bytes,0) AS table_bytes FROM (SELECT c.oid,nspname AS table_schema, relname AS TABLE_NAME, c.reltuples AS row_estimate, pg_total_relation_size(c.oid) AS total_bytes, pg_indexes_size(c.oid) AS index_bytes, pg_total_relation_size(reltoastrelid) AS toast_bytes FROM pg_class c LEFT JOIN pg_namespace n ON n.oid = c.relnamespace WHERE relkind = 'r' and nspname not in ('pg_catalog')) a) a order by a.table_schema asc";

    $result = pg_query($db_connection, $it);
    while($output = pg_fetch_row($result)){

?>

        <tr>
            <td><?php echo $output[0];?></td>
            <td><?php echo $output[1];?></td>
            <td><?php echo $output[2];?></td>
            <td><?php echo $output[7];?></td>
            <td><?php echo $output[8];?></td>
            <td><?php echo $output[9];?></td>
        </tr>

<?php

    }
    pg_close($db_connection);

?>

</table>
</body>
</form>
</html>