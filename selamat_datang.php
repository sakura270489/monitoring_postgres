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
$db_gakin_slave = pg_connect("host=172.18.20.25 dbname=gakin user=postgres password=admin245");
$db_bumil = pg_connect("host=172.18.1.191 dbname=ebumil user=postgres password=dba.surabaya@2019");
$db_mon = pg_connect("host=172.18.1.94 dbname=mon user=postgres password=dba.surabaya@2020");
$db_mon_50 = pg_connect("host=172.18.0.50 dbname=monitoring user=postgres password=dba.Surabaya@2020");
$db_wdh = pg_connect("host=172.18.0.44 dbname=wdh_2020 user=postgres password=dba.surabaya@2020");
$db_apel = pg_connect("host=172.18.0.103 dbname=ppt user=postgres password=dba.surabaya@2020");

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
                            <th class="detail-col">&nbsp; Nama Database &nbsp;</th>
                            <th class="detail-col">&nbsp; Ukuran di MB &nbsp;</th>
                        </tr>
                        <?php

                            $gt = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            $result_ssw = pg_query($db_ssw, $gt);
	                        while($ssw = pg_fetch_row($result_ssw)){

                        ?>
                        <tr>
                            <td align="left">&nbsp;<?php echo $ssw[0];?>&nbsp;</td>
                            <td align="left">&nbsp;<?php echo $ssw[1];?>&nbsp;</td>
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
                            <th class="detail-col">&nbsp; Nama Database &nbsp;</th>
                            <th class="detail-col">&nbsp; Ukuran di MB &nbsp;</th>
                        </tr>
                        <?php

                            $ge = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            $result_esurat = pg_query($db_esurat, $ge);
	                        while($esurat = pg_fetch_row($result_esurat)){

                        ?>
                        <tr>
                            <td align="left">&nbsp;<?php echo $esurat[0];?>&nbsp;</td>
                            <td align="left">&nbsp;<?php echo $esurat[1];?>&nbsp;</td>
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
                            <th class="detail-col">&nbsp; Nama Database &nbsp;</th>
                            <th class="detail-col">&nbsp; Ukuran di MB &nbsp;</th>
                        </tr>
                        <?php

                            $gse = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            // echo $gq;
                            $resul_esurat_slave = pg_query($db_esurat_slave, $gse);
	                        while($esurat_slave = pg_fetch_row($resul_esurat_slave)){

                        ?>
                        <tr>
                            <td align="left">&nbsp;<?php echo $esurat_slave[0];?>&nbsp;</td>
                            <td align="left">&nbsp;<?php echo $esurat_slave[1];?>&nbsp;</td>
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
                            <th class="detail-col">&nbsp; Nama Database &nbsp;</th>
                            <th class="detail-col">&nbsp; Ukuran di MB &nbsp;</th>
                        </tr>
                        <?php

                            $gq = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            $result_tekocak = pg_query($db_tekocak, $gq);
	                        while($tekocak = pg_fetch_row($result_tekocak)){

                        ?>
                        <tr>
                            <td align="left">&nbsp;<?php echo $tekocak[0];?>&nbsp;</td>
                            <td align="left">&nbsp;<?php echo $tekocak[1];?>&nbsp;</td>
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
                            <th class="detail-col">&nbsp; Nama Database &nbsp;</th>
                            <th class="detail-col">&nbsp; Ukuran di MB &nbsp;</th>
                        </tr>
                        <?php

                            $gg = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            $result_gakin = pg_query($db_gakin, $gg);
	                        while($gakin = pg_fetch_row($result_gakin)){

                        ?>
                        <tr>
                            <td align="left">&nbsp;<?php echo $gakin[0];?>&nbsp;</td>
                            <td align="left">&nbsp;<?php echo $gakin[1];?>&nbsp;</td>
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
                    <h5>DISK SPACE Gakin SLAVE</h5>
                  </div>
                  <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="1" align="center">
                        <tr>
                            <th class="detail-col">&nbsp; Nama Database &nbsp;</th>
                            <th class="detail-col">&nbsp; Ukuran di MB &nbsp;</th>
                        </tr>
                        <?php

                            $epems = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            $result_gakin_slave = pg_query($db_gakin_slave, $epems);
	                        while($gakin_slave = pg_fetch_row($result_gakin_slave)){

                        ?>
                        <tr>
                            <td align="left">&nbsp;<?php echo $gakin_slave[0];?>&nbsp;</td>
                            <td align="left">&nbsp;<?php echo $gakin_slave[1];?>&nbsp;</td>
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
                            <th class="detail-col">&nbsp; Nama Database &nbsp;</th>
                            <th class="detail-col">&nbsp; Ukuran di MB &nbsp;</th>
                        </tr>
                        <?php

                            $gb = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            $result_bumil = pg_query($db_bumil, $gb);
	                        while($bumil = pg_fetch_row($result_bumil)){

                        ?>
                        <tr>
                            <td align="left">&nbsp;<?php echo $bumil[0];?>&nbsp;</td>
                            <td align="left">&nbsp;<?php echo $bumil[1];?>&nbsp;</td>
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
                            <th class="detail-col">&nbsp; Nama Database &nbsp;</th>
                            <th class="detail-col">&nbsp; Ukuran di MB &nbsp;</th>
                        </tr>
                        <?php

                            $gmm = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            $result_50 = pg_query($db_mon_50, $gmm);
	                        while($mon_50 = pg_fetch_row($result_50)){

                        ?>
                        <tr>
                            <td align="left">&nbsp;<?php echo $mon_50[0];?>&nbsp;</td>
                            <td align="left">&nbsp;<?php echo $mon_50[1];?>&nbsp;</td>
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
                    <h5>DISK SPACE MONITORING DB APEL PETANG 103</h5>
                  </div>
                  <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="1" align="center">
                        <tr>
                            <th class="detail-col">&nbsp; Nama Database &nbsp;</th>
                            <th class="detail-col">&nbsp; Ukuran di MB &nbsp;</th>
                        </tr>
                        <?php

                            $apl = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            // echo $apl;
                            $result_103 = pg_query($db_apel, $apl);
	                        while($mon_103 = pg_fetch_row($result_103)){

                        ?>
                        <tr>
                            <td align="left">&nbsp;<?php echo $mon_103[0];?>&nbsp;</td>
                            <td align="left">&nbsp;<?php echo $mon_103[1];?>&nbsp;</td>
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
                            <th class="detail-col">&nbsp; Nama Database &nbsp;</th>
                            <th class="detail-col">&nbsp; Ukuran di MB &nbsp;</th>
                        </tr>
                        <?php

                            $gq = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            // echo $gq;
                            $result_ssw_dev = pg_query($db_ssw_dev, $gq);
	                        while($ssw_dev = pg_fetch_row($result_ssw_dev)){

                        ?>
                        <tr>
                            <td align="left">&nbsp;<?php echo $ssw_dev[0];?>&nbsp;</td>
                            <td align="left">&nbsp;<?php echo $ssw_dev[1];?>&nbsp;</td>
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
                            <th class="detail-col">&nbsp; Nama Database &nbsp;</th>
                            <th class="detail-col">&nbsp; Ukuran di MB &nbsp;</th>
                        </tr>
                        <?php

                            $gs = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            // echo $gs;
                            $result_mon = pg_query($db_mon, $gs);
	                        while($mon_94 = pg_fetch_row($result_mon)){

                        ?>
                        <tr>
                            <td align="left">&nbsp;<?php echo $mon_94[0];?>&nbsp;</td>
                            <td align="left">&nbsp;<?php echo $mon_94[1];?>&nbsp;</td>
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
                    <h5>DISK SPACE DB WDH 0.44</h5>
                  </div>
                  <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="1" align="center">
                        <tr>
                            <th class="detail-col">&nbsp; Nama Database &nbsp;</th>
                            <th class="detail-col">&nbsp; Ukuran di MB &nbsp;</th>
                        </tr>
                        <?php

                            $gse = "SELECT pg_database.datname as database_name, pg_size_pretty(pg_database_size(pg_database.datname)) AS size_in_mb FROM pg_database ORDER by size_in_mb DESC";
                            // echo $gq;
                            $resul_wdh = pg_query($db_wdh, $gse);
	                        while($esurat_wdh = pg_fetch_row($resul_wdh)){

                        ?>
                        <tr>
                            <td align="left">&nbsp;<?php echo $esurat_wdh[0];?>&nbsp;</td>
                            <td align="left">&nbsp;<?php echo $esurat_wdh[1];?>&nbsp;</td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                        </div>
                </div>
              </div>
    </div>