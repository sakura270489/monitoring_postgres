<?php

    session_start();

    $db_connection = pg_connect("host=172.18.1.94 dbname=mon user=postgres password=dba.surabaya@2020");

    if($_GET['db'] == "ssw"){
        $db_name = "ssw_234";
    }else if($_GET['db'] == "gakin"){
        $db_name = "gakin_0_245";
    }else if($_GET['db'] == "esurat"){
        $db_name = "esurat_233";
    }else if($_GET['db'] == "tekocak"){
        $db_name = "tekocak_34";
    }else if($_GET['db'] == "bumil"){
        $db_name = "bumil_191";
    }else if($_GET['db'] == "monev"){
        $db_name = "monev_50";
    }else if($_GET['db'] == "wdh_40"){
        $db_name = "wdh_40";
    }else if($_GET['db'] == "apel"){
        $db_name = "apel";
    }

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
								<a href="#">

                                    <?php
                                    
                                        if($_GET['db'] == "ssw"){
                                            echo "SSW";
                                        }else if($_GET['db'] == "gakin"){
                                            echo "Gakin";
                                        }else if($_GET['db'] == "esurat"){
                                            echo "Esurat";
                                        }else if($_GET['db'] == "tekocak"){
                                            echo "Tekocak";
                                        }else if($_GET['db'] == "bumil"){
                                            echo "Bumil";
                                        }else if($_GET['db'] == "monev"){
                                            echo "EMONEV";
                                        }else if($_GET['db'] == "wdh_40"){
                                            echo "WDH";
                                        }else if($_GET['db'] == "apel"){
                                            echo "Apel Petang";
                                        }
                                    
                                    ?>

                                </a>
							</li>
							<li class="active">Monitoring Pengguna IP</li>
						</ul><!-- /.breadcrumb -->
	</div>
	<div class="page-header">
        <h1>
        <?php
        
            if($_GET['db'] == "ssw"){
                echo "Monitoring SSW";
            }else if($_GET['db'] == "gakin"){
                echo "Monitoring Gakin";
            }else if($_GET['db'] == "esurat"){
                echo "Monitoring Esurat";
            }else if($_GET['db'] == "tekocak"){
                echo "Monitoring Tekocak";
            }else if($_GET['db'] == "bumil"){
                echo "Monitoring Bumil";
            }else if($_GET['db'] == "monev"){
                echo "Monitoring Emonev 50";
            }else if($_GET['db'] == "wdh_40"){
                echo "Monitoring WDH";
            }else if($_GET['db'] == "apel"){
                echo "Monitoring Apel Petang";
            }

        ?>
            
        </h1>
    </div>
    <?php

        if ($_SESSION['level'] == 1) {
    ?>
    <table border=0 id="simple-table" class="table  table-bordered table-hover">
		<tr>
            <td class="detail-col">&nbsp;</td>
			<td class="detail-col" align = "right">&nbsp;</td>
            <td class="detail-col" align = "right">&nbsp;</td>
            <td class="detail-col" align = "right">&nbsp;</td>
            <td class="detail-col" align = "right">&nbsp;</td>
            <td class="detail-col" align = "right">&nbsp;</td>
            <td class="detail-col" align = "right">&nbsp;</td>
            <td class="detail-col" align = "right">&nbsp;</td>
            <td class="detail-col" align = "right">&nbsp;</td>
            <td class="detail-col" align = "right">&nbsp;</td>
            <td class="detail-col" align = "right">&nbsp;</td>
			<td class="detail-col"><a href="home.php?halaman=tambah_ip&edit_ip=<?php echo $_GET['db']; ?>" class="btn btn-app btn-danger btn-sm">Tambah</a></td>
		</tr>
	</table>
	<p>&nbsp;</p>
    <?php
        }

        $pw = "select count(db) as jumlah from master_pengguna_ip";
        $gd = pg_query($db_connection, $pw);
        $ms = pg_fetch_row($gd);

        if ($ms[0] > 0) {
            ?>
	<!-- <div class="content-panel">
            <div class="adv-table"> -->
	<table border=1 id="simple-table" class="table  table-bordered table-hover">
	
		<tr>
			<th class="detail-col" align="center">Nama</th>
			<th class="detail-col" align="center">IP</th>
            <?php

                  if ($_SESSION['level'] == 1) {
                      ?>
            <th class="detail-col" align="center">Action</th>
            <?php
                  } ?>
		</tr>

<?php

    $it = "select nama, ip, db, id_ip from master_pengguna_ip where db = '".$db_name."' order by nama asc";
            // echo $it;
            $result = pg_query($db_connection, $it);
            while ($output = pg_fetch_row($result)) {
                ?>

        <tr>
            <td><?php echo $output[0]; ?></td>
            <td><?php echo $output[1]; ?></td>
            <?php

                  if ($_SESSION['level'] == 1) {
                      ?>
            <td><a href='home.php?halaman=edit_daftar_ip&edit_ip=<?php echo $_GET['db']; ?>&id=<?php echo $output[3]?>' class="btn btn-warning">Edit</a></td>
            <?php
                  } ?>
        </tr>

<?php
            }
            pg_close($db_connection); ?>

</table>
<!-- </div>
          </div> -->

<?php
        }else{
            echo "&nbsp;";
        }

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
 