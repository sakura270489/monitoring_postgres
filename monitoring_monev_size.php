<?php

    $db_connection = pg_connect("host=172.18.0.50 dbname=monitoring user=postgres password=dba.Surabaya@2020");

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
								<a href="#">EMONEV</a>
							</li>
							<li class="active">Monitoring Size</li>
						</ul><!-- /.breadcrumb -->
	</div>
	<div class="page-header">
        <h1>
            Monitoring EMONEV
        </h1>
    </div>
	<div class="content-panel">
            <div class="adv-table">
	<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
	
		<tr>
			<th class="detail-col">OID</th>
			<th class="detail-col">Table Schema</th>
			<th class="detail-col">Table Name</th>
			<th class="detail-col">Total</th>
			<th class="detail-col">Index </th>
			<th class="detail-col">Table </th>
            <th class="detail-col">Jumlah Table </th>
		</tr>

<?php

    $it = "SELECT *, pg_size_pretty(total_bytes) AS total, pg_size_pretty(index_bytes) AS INDEX, pg_size_pretty(toast_bytes) AS toast, pg_size_pretty(table_bytes) AS TABLE FROM (SELECT *, total_bytes-index_bytes-COALESCE(toast_bytes,0) AS table_bytes FROM (SELECT c.oid,nspname AS table_schema, relname AS TABLE_NAME, c.reltuples AS row_estimate, pg_total_relation_size(c.oid) AS total_bytes, pg_indexes_size(c.oid) AS index_bytes, pg_total_relation_size(reltoastrelid) AS toast_bytes FROM pg_class c LEFT JOIN pg_namespace n ON n.oid = c.relnamespace WHERE relkind = 'r' and nspname not in ('pg_catalog')) a) a order by a.table_schema, a.table_name asc ";

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
            <td><?php 
                    $ry = 'select count(1) as jumlah from "'.$output[1].'"."'.$output[2].'"';
                    $hasil = pg_query($db_connection, $ry);
                    while ($po = pg_fetch_row($hasil)) {
                      echo $po[0]."<br>";
                    }
                ?></td>
        </tr>

<?php

    }
    pg_close($db_connection);

?>

</table>
</div>
          </div>

<?php

//  select count(*) from ....

?>

<!-- <div class="modal-footer no-margin-top">

	<ul class="pagination pull-right no-margin">
		<li class="prev disabled">
			<a href="#">
				<i class="ace-icon fa fa-angle-double-left"></i>
			</a>
		</li>

		<li class="active">
			<a href="?halaman=ssw_size&page=1">1</a>
		</li>

		<li>
			<a href="?halaman=ssw_size&page=2">2</a>
		</li>

		<li>
			<a href="#">3</a>
		</li>

		<li class="next">
			<a href="#">
				<i class="ace-icon fa fa-angle-double-right"></i>
			</a>
		</li>
	</ul>
</div> -->

<script type="text/javascript">

/* function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    } */

// $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      /* var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td'); */
    //   nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
    //   nCloneTd.className = "center";

    //   $('#hidden-table-info thead tr').each(function() {
    //     this.insertBefore(nCloneTh, this.childNodes[0]);
    //   });

    //   $('#hidden-table-info tbody tr').each(function() {
    //     this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
    //   });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
     /*  var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      }); */

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
     /*  $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) { */
          /* This row is already open - close it */
          /* this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else { */
          /* Open this row */
          /* this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    }); */

</script>

</form>
 