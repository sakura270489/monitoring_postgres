<?php

session_start();

if (isset($_SESSION["nama"])) {
    if ((time() - $_SESSION["last_login_time"]) > 60) {
        header("window.location.href = 'logout.php'");
    }
}

$db_ssw = pg_connect("host=172.18.1.234 dbname=ssw user=postgres password=singlepostgreswindow");
$db_ssw_dev = pg_connect("host=172.18.1.244 dbname=ssw_import user=postgres password=singlepostgreswindow");
$db_esurat = pg_connect("host=172.18.1.233 dbname=esuratmerdeka user=postgres password=!TakonAe.Juan");
$db_esurat_slave = pg_connect("host=172.18.20.31 dbname=esuratmerdeka user=postgres password=!TakonAe.Juan");
$db_tekocak = pg_connect("host=172.18.1.34 dbname=garbis_sby user=egov1 password=EGOVPASS");
$db_gakin = pg_connect("host=172.18.0.245 dbname=gakin user=postgres password=admin245");
$db_bumil = pg_connect("host=172.18.1.191 dbname=ebumil user=postgres password=dba.surabaya@2019");
$db_mon = pg_connect("host=172.18.1.94 dbname=mon user=postgres password=dba.surabaya@2020");
$db_mon_50 = pg_connect("host=172.18.0.50 dbname=monitoring user=postgres password=dba.Surabaya@2020");

?>



<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="home.php?halaman=selamat_datang">Home</a>
        </li>
    </ul><!-- /.breadcrumb -->
</div>

<h1>Selamat Datang di Monitoring Database</h1>

<!-- ssw disk -->
<div class="row">
<div class="col-md-2 col-sm-2 mb">
                <div class="grey-panel pn donut-chart">
                    <p>&nbsp;</p>
                  <div class="green-header" align="center">
                    <h5>DISK SPACE SSW</h5>
                  </div>
                  <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="1" align="center">
                        <tr>
                            <th class="detail-col"> Nama Database </th>
                            <th class="detail-col"> Ukuran di MB </th>
                        </tr>
                        <?php

                            $gt = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            $result_ssw = pg_query($db_ssw, $gt);
	                        while($ssw = pg_fetch_row($result_ssw)){

                        ?>
                        <tr>
                            <td align="left"><?php echo $ssw[0];?></td>
                            <td align="left"><?php echo $ssw[1];?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                        </div>
                </div>
              </div>

              <div class="col-md-2 col-sm-2 mb">
                <div class="grey-panel pn donut-chart">
                    <p>&nbsp;</p>
                  <div class="green-header" align="center">
                    <h5>DISK SPACE Esurat</h5>
                  </div>
                  <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="1" align="center">
                        <tr>
                            <th class="detail-col"> Nama Database </th>
                            <th class="detail-col"> Ukuran di MB </th>
                        </tr>
                        <?php

                            $ge = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            $result_esurat = pg_query($db_esurat, $ge);
	                        while($esurat = pg_fetch_row($result_esurat)){

                        ?>
                        <tr>
                            <td align="left"><?php echo $esurat[0];?></td>
                            <td align="left"><?php echo $esurat[1];?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                        </div>
                </div>
              </div>

              <div class="col-md-2 col-sm-2 mb">
                <div class="grey-panel pn donut-chart">
                    <p>&nbsp;</p>
                  <div class="green-header" align="center">
                    <h5>DISK SPACE Tekocak</h5>
                  </div>
                  <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="1" align="center">
                        <tr>
                            <th class="detail-col"> Nama Database </th>
                            <th class="detail-col"> Ukuran di MB </th>
                        </tr>
                        <?php

                            $gq = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            $result_tekocak = pg_query($db_tekocak, $gq);
	                        while($tekocak = pg_fetch_row($result_tekocak)){

                        ?>
                        <tr>
                            <td align="left"><?php echo $tekocak[0];?></td>
                            <td align="left"><?php echo $tekocak[1];?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                        </div>
                </div>
              </div>

              <div class="col-md-2 col-sm-2 mb">
                <div class="grey-panel pn donut-chart">
                    <p>&nbsp;</p>
                  <div class="green-header" align="center">
                    <h5>DISK SPACE Gakin</h5>
                  </div>
                  <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="1" align="center">
                        <tr>
                            <th class="detail-col"> Nama Database </th>
                            <th class="detail-col"> Ukuran di MB </th>
                        </tr>
                        <?php

                            $gg = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            $result_gakin = pg_query($db_gakin, $gg);
	                        while($gakin = pg_fetch_row($result_gakin)){

                        ?>
                        <tr>
                            <td align="left"><?php echo $gakin[0];?></td>
                            <td align="left"><?php echo $gakin[1];?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                        </div>
                </div>
              </div>

              <div class="col-md-2 col-sm-2 mb">
                <div class="grey-panel pn donut-chart">
                    <p>&nbsp;</p>
                  <div class="green-header" align="center">
                    <h5>DISK SPACE Bumil</h5>
                  </div>
                  <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="1" align="center">
                        <tr>
                            <th class="detail-col"> Nama Database </th>
                            <th class="detail-col"> Ukuran di MB </th>
                        </tr>
                        <?php

                            $gb = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            $result_bumil = pg_query($db_bumil, $gb);
	                        while($bumil = pg_fetch_row($result_bumil)){

                        ?>
                        <tr>
                            <td align="left"><?php echo $bumil[0];?></td>
                            <td align="left"><?php echo $bumil[1];?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                        </div>
                </div>
              </div>

              <div class="col-md-2 col-sm-2 mb">
                <div class="grey-panel pn donut-chart">
                    <p>&nbsp;</p>
                  <div class="green-header" align="center">
                    <h5>DISK SPACE MONITORING DB 50</h5>
                  </div>
                  <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="1" align="center">
                        <tr>
                            <th class="detail-col"> Nama Database </th>
                            <th class="detail-col"> Ukuran di MB </th>
                        </tr>
                        <?php

                            $gmm = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            $result_50 = pg_query($db_mon_50, $gmm);
	                        while($mon_50 = pg_fetch_row($result_50)){

                        ?>
                        <tr>
                            <td align="left"><?php echo $mon_50[0];?></td>
                            <td align="left"><?php echo $mon_50[1];?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                        </div>
                </div>
              </div>

              <div class="col-md-2 col-sm-2 mb">
                <div class="grey-panel pn donut-chart">
                    <p>&nbsp;</p>
                  <div class="green-header" align="center">
                    <h5>DISK SPACE SSW_dev 244</h5>
                  </div>
                  <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="1" align="center">
                        <tr>
                            <th class="detail-col"> Nama Database </th>
                            <th class="detail-col"> Ukuran di MB </th>
                        </tr>
                        <?php

                            $gq = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            // echo $gq;
                            $result_ssw_dev = pg_query($db_ssw_dev, $gq);
	                        while($ssw_dev = pg_fetch_row($result_ssw_dev)){

                        ?>
                        <tr>
                            <td align="left"><?php echo $ssw_dev[0];?></td>
                            <td align="left"><?php echo $ssw_dev[1];?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                        </div>
                </div>
              </div>

              <div class="col-md-2 col-sm-2 mb">
                <div class="grey-panel pn donut-chart">
                    <p>&nbsp;</p>
                  <div class="green-header" align="center">
                    <h5>DISK SPACE MONITORING SEMUA DB 94</h5>
                  </div>
                  <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="1" align="center">
                        <tr>
                            <th class="detail-col"> Nama Database </th>
                            <th class="detail-col"> Ukuran di MB </th>
                        </tr>
                        <?php

                            $gs = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            // echo $gs;
                            $result_mon = pg_query($db_mon, $gs);
	                        while($mon_94 = pg_fetch_row($result_mon)){

                        ?>
                        <tr>
                            <td align="left"><?php echo $mon_94[0];?></td>
                            <td align="left"><?php echo $mon_94[1];?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                        </div>
                </div>
              </div>

              <div class="col-md-2 col-sm-2 mb">
                <div class="grey-panel pn donut-chart">
                    <p>&nbsp;</p>
                  <div class="green-header" align="center">
                    <h5>DISK SPACE SLAVE ESURAT</h5>
                  </div>
                  <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="1" align="center">
                        <tr>
                            <th class="detail-col"> Nama Database </th>
                            <th class="detail-col"> Ukuran di MB </th>
                        </tr>
                        <?php

                            $gse = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            // echo $gq;
                            $resul_esurat_slave = pg_query($db_esurat_slave, $gse);
	                        while($esurat_slave = pg_fetch_row($resul_esurat_slave)){

                        ?>
                        <tr>
                            <td align="left"><?php echo $esurat_slave[0];?></td>
                            <td align="left"><?php echo $esurat_slave[1];?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                        </div>
                </div>
              </div>
    </div>