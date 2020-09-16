<?php
/* 
    if($_GET['halaman'] == "monitoring_ssw"){
      include_once "monitoring_ssw.php";
    } else
    if($_GET['halaman'] == "monitoring_realtime"){
      include_once "monitoring_ssw_realtime.php";
    } */

    session_start();

?>

<!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
		<p>&nbsp;</p>
		<p>&nbsp;</p>
          <!-- <p class="centered"><a href="profile.html"><img src="img/cloudmonitoring.jpg" class="img-circle" width="80"></a></p>-->
          <p class="centered"><img src="img/Data-Modeling-Software-1.jpg" class="img-circle" width="180" height="150"></p>
          <!-- <h5 class="centered">Sam Soffes</h5> -->
          <p>&nbsp;</p>
          <li class="mt">
            <a class="active" href="home.php?halaman=selamat_datang">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>SSW</span>
              </a>
            <ul class="sub">
              <li><a href="home.php?halaman=monitoring_realtime">Monitoring Real Time</a></li>
              <?php

                  if ($_SESSION['level'] == 1) {
              ?>
              <li><a href="home.php?halaman=monitoring_ssw">Monitoring Aktifitas</a></li>
              <?php
                  }
              
              ?>
              <li><a href="home.php?halaman=ssw_size">Monitoring Size</a></li>
              <li><a href="home.php?halaman=ssw_user">Monitoring User</a></li>
              <li><a href="home.php?halaman=daftar_ip&db=ssw">Monitoring Daftar IP</a></li>
              <!-- <li><a href="font_awesome.html">Font Awesome</a></li> -->
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Esurat</span>
              </a>
            <ul class="sub">
              <li><a href="home.php?halaman=monitoring_realtime_esurat">Monitoring Real Time</a></li>
              <?php

                  if ($_SESSION['level'] == 1) {
                      ?>
              <li><a href="home.php?halaman=monitoring_esurat">Monitoring Aktifitas</a></li>
              <?php
                  
                  }
              
              ?>
              <li><a href="home.php?halaman=esurat_size">Monitoring Size</a></li>
              <li><a href="home.php?halaman=esurat_user">Monitoring User</a></li>
              <li><a href="home.php?halaman=daftar_ip&db=esurat">Monitoring Daftar IP</a></li>
              <!-- <li><a href="font_awesome.html">Font Awesome</a></li> -->
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Tekocak</span>
              </a>
            <ul class="sub">
              <li><a href="home.php?halaman=monitoring_realtime_tekocak">Monitoring Real Time</a></li>
              <?php

                  if ($_SESSION['level'] == 1) {
                      ?>
              <li><a href="home.php?halaman=monitoring_tekocak">Monitoring Aktifitas</a></li>
              <?php
                  }
              
              ?>
              <li><a href="home.php?halaman=tekocak_size">Monitoring Size</a></li>
              <li><a href="home.php?halaman=tekocak_user">Monitoring User</a></li>
              <li><a href="home.php?halaman=daftar_ip&db=tekocak">Monitoring Daftar IP</a></li>
              <!-- <li><a href="font_awesome.html">Font Awesome</a></li> -->
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Gakin</span>
              </a>
            <ul class="sub">
              <li><a href="home.php?halaman=monitoring_realtime_gakin">Monitoring Real Time</a></li>
              <?php

                  if ($_SESSION['level'] == 1) {
                      ?>
              <li><a href="home.php?halaman=monitoring_gakin">Monitoring Aktifitas</a></li>
              <?php
                  }
              
              ?>
              <li><a href="home.php?halaman=gakin_size">Monitoring Size</a></li>
              <li><a href="home.php?halaman=gakin_user">Monitoring User</a></li>
              <li><a href="home.php?halaman=daftar_ip&db=gakin">Monitoring Daftar IP</a></li>
              <!-- <li><a href="font_awesome.html">Font Awesome</a></li> -->
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Bumil</span>
              </a>
            <ul class="sub">
              <li><a href="home.php?halaman=monitoring_realtime_bumil">Monitoring Real Time</a></li>
              <?php

                  if ($_SESSION['level'] == 1) {
                      ?>
              <li><a href="home.php?halaman=monitoring_bumil">Monitoring Aktifitas</a></li>
              <?php
                  }
              
              ?>
              <li><a href="home.php?halaman=bumil_size">Monitoring Size</a></li>
              <li><a href="home.php?halaman=bumil_user">Monitoring User</a></li>
              <li><a href="home.php?halaman=daftar_ip&db=bumil">Monitoring Daftar IP</a></li>
              <!-- <li><a href="font_awesome.html">Font Awesome</a></li> -->
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Emonev</span>
              </a>
            <ul class="sub">
              <li><a href="home.php?halaman=monitoring_realtime_monev">Monitoring Real Time</a></li>
              <?php

                  if ($_SESSION['level'] == 1) {
                      ?>
              <li><a href="home.php?halaman=monitoring_monev">Monitoring Aktifitas</a></li>
              <?php
                  }
              
              ?>
              <li><a href="home.php?halaman=monev_size">Monitoring Size</a></li>
              <li><a href="home.php?halaman=monev_user">Monitoring User</a></li>
              <li><a href="home.php?halaman=daftar_ip&db=monev">Monitoring Daftar IP</a></li>
              <!-- <li><a href="font_awesome.html">Font Awesome</a></li> -->
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>DB SQL 85</span>
              </a>
            <ul class="sub">
              <li><a href="home.php?halaman=sql_85_realtime">Monitoring Real Time</a></li>
              <?php

                  if ($_SESSION['level'] == 1) {
                      ?>
              <li><a href="home.php?halaman=sql_85">Monitoring Aktifitas</a></li>
              <?php
                  
                  }
              
              ?>
              <!--<li><a href="home.php?halaman=esurat_size">Monitoring Size</a></li>
              <li><a href="home.php?halaman=esurat_user">Monitoring User</a></li>
              <li><a href="home.php?halaman=daftar_ip&db=esurat">Monitoring Daftar IP</a></li>-->
              <!-- <li><a href="font_awesome.html">Font Awesome</a></li> -->
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>DB SQL 40</span>
              </a>
            <ul class="sub">
              <li><a href="home.php?halaman=sql_40_realtime">Monitoring Real Time</a></li>
              <?php

                  if ($_SESSION['level'] == 1) {
                      ?>
              <li><a href="home.php?halaman=sql_40">Monitoring Aktifitas</a></li>
              <?php
                  
                  }
              
              ?>
              <!--<li><a href="home.php?halaman=esurat_size">Monitoring Size</a></li>
              <li><a href="home.php?halaman=esurat_user">Monitoring User</a></li>
              <li><a href="home.php?halaman=daftar_ip&db=esurat">Monitoring Daftar IP</a></li>-->
              <!-- <li><a href="font_awesome.html">Font Awesome</a></li> -->
            </ul>
          </li>
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->