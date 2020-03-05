<?php

session_start();

if (isset($_SESSION["nama"])) {
    if ((time() - $_SESSION["last_login_time"]) > 60) {
        header("window.location.href = 'logout.php'");
    }
}

$db_ssw = pg_connect("host=172.18.1.234 dbname=ssw user=postgres password=singlepostgreswindow");
$db_esurat = pg_connect("host=172.18.1.233 dbname=esuratmerdeka user=postgres password=!TakonAe.Juan");
$db_tekocak = pg_connect("host=172.18.1.34 dbname=garbis_sby user=egov1 password=EGOVPASS");
$db_gakin = pg_connect("host=172.18.0.245 dbname=gakin user=postgres password=admin245");
$db_bumil = pg_connect("host=172.18.1.191 dbname=ebumil user=postgres password=dba.surabaya@2019");

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
                            <td><?php echo $ssw[0];?></td>
                            <td><?php echo $ssw[1];?></td>
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
                            <td><?php echo $esurat[0];?></td>
                            <td><?php echo $esurat[1];?></td>
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
                            <td><?php echo $tekocak[0];?></td>
                            <td><?php echo $tekocak[1];?></td>
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
                            <td><?php echo $gakin[0];?></td>
                            <td><?php echo $gakin[1];?></td>
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
                            <td><?php echo $bumil[0];?></td>
                            <td><?php echo $bumil[1];?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                        </div>
                </div>
              </div>
    </div>