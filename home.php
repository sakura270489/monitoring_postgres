<?php

  session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Monitoring Database Postgres</title>

  <!-- Favicons -->
  <link href="img/500_F_125712670_cXZJuMoaei6pxIzWZnqqbDC1WA3DpQ9H.jpg" rel="icon">
  <!-- <link href="img/cloudmonitoring.png" rel="cloudmonitoring"> -->

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />

  
  <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <?php include_once('header.php');?>
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <?php include_once('sidebar.php');?>
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <script src="lib/jquery/jquery.min.js"></script>

  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!-- <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script> -->
  <!--script for this page-->
  <!-- <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script> -->
  
    <section id="main-content">
      <section class="wrapper">
        <?php // include('monitoring_ssw.php');

              if($_GET['halaman'] == "monitoring_ssw"){
                include_once "monitoring_ssw.php";
              } elseif($_GET['halaman'] == "monitoring_realtime"){
                include_once "monitoring_ssw_realtime.php";
              } elseif($_GET['halaman'] == "selamat_datang"){
                include_once "selamat_datang.php";
              } elseif($_GET['halaman'] == "ssw_size"){
                include_once "monitoring_ssw_size.php";
              } elseif($_GET['halaman'] == "monitoring_esurat"){
                include_once "monitoring_esurat.php";
              } elseif($_GET['halaman'] == "monitoring_realtime_esurat"){
                include_once "monitoring_esurat_realtime.php";
              } elseif($_GET['halaman'] == "esurat_size"){
                include_once "monitoring_esurat_size.php";
              } elseif($_GET['halaman'] == "monitoring_tekocak"){
                include_once "monitoring_tekocak.php";
              } elseif($_GET['halaman'] == "monitoring_realtime_tekocak"){
                include_once "monitoring_tekocak_realtime.php";
              } elseif($_GET['halaman'] == "tekocak_size"){
                include_once "monitoring_tekocak_size.php";
              } elseif($_GET['halaman'] == "monitoring_gakin"){
                include_once "monitoring_gakin.php";
              } elseif($_GET['halaman'] == "monitoring_realtime_gakin"){
                include_once "monitoring_gakin_realtime.php";
              } elseif($_GET['halaman'] == "gakin_size"){
                include_once "monitoring_gakin_size.php";
              } elseif($_GET['halaman'] == "monitoring_bumil"){
                include_once "monitoring_bumil.php";
              } elseif($_GET['halaman'] == "monitoring_realtime_bumil"){
                include_once "monitoring_bumil_realtime.php";
              } elseif($_GET['halaman'] == "bumil_size"){
                include_once "monitoring_bumil_size.php";
              }elseif($_GET['halaman'] == "gakin_user"){
                include_once "monitoring_gakin_user.php";
              }elseif($_GET['halaman'] == "ssw_user"){
                include_once "monitoring_ssw_user.php";
              }elseif($_GET['halaman'] == "tekocak_user"){
                include_once "monitoring_tekocak_user.php";
              }elseif($_GET['halaman'] == "esurat_user"){
                include_once "monitoring_esurat_user.php";
              }elseif($_GET['halaman'] == "bumil_user"){
                include_once "monitoring_bumil_user.php";
              }elseif($_GET['halaman'] == "daftar_ip"){
                include_once "daftar_ip.php";
              }elseif($_GET['halaman'] == "sql_85_realtime"){
                include_once "monitoring_db_sql85_realtime.php";
              }elseif($_GET['halaman'] == "sql_85"){
                include_once "monitoring_db_sql.php";
              }elseif($_GET['halaman'] == "monitoring_realtime_monev"){
                include_once "monitoring_monev_realtime.php";
              }elseif($_GET['halaman'] == "monev_size"){
                include_once "monitoring_monev_size.php";
              }elseif($_GET['halaman'] == "monitoring_monev"){
                include_once "monitoring_monev.php";
              }elseif($_GET['halaman'] == "monev_user"){
                include_once "monitoring_monev_user.php";
              }elseif($_GET['halaman'] == "edit_daftar_ip"){
                include_once "edit_daftar_ip.php";
              }elseif($_GET['halaman'] == "tambah_ip"){
                include_once "tambah_daftar_ip.php";
              }elseif($_GET['halaman'] == "sql_40_realtime"){
                include_once "monitoring_db_sql40_realtime.php";
              }elseif($_GET['halaman'] == "sql_40"){
                include_once "monitoring_db40_sql.php";
              }elseif($_GET['halaman'] == "monitoring_realtime_wdh"){
                include_once "monitoring_wdh_realtime.php";
              }elseif($_GET['halaman'] == "monitoring_wdh"){
                include_once "monitoring_wdh.php";
              }elseif($_GET['halaman'] == "wdh_size"){
                include_once "monitoring_wdh_size.php";
              }elseif($_GET['halaman'] == "wdh_user"){
                include_once "monitoring_wdh_user.php";
              }elseif($_GET['halaman'] == "monitoring_apel"){
                include_once "monitoring_apel.php";
              }elseif($_GET['halaman'] == "monitoring_realtime_apel"){
                include_once "monitoring_apel_realtime.php";
              }elseif($_GET['halaman'] == "apel_size"){
                include_once "monitoring_apel_size.php";
              }elseif($_GET['halaman'] == "apel_user"){
                include_once "monitoring_apel_user.php";
              }elseif($_GET['halaman'] == "tambah_pengguna_db"){
                include_once "insert_pengguna_db.php";
              }elseif($_GET['halaman'] == "daftar_pengguna_db"){
                include_once "daftar_pengguna_db.php";
              }elseif($_GET['halaman'] == "tambah_db"){
                include_once "insert_db.php";
              }elseif($_GET['halaman'] == "daftar_db"){
                include_once "daftar_db.php";
              }
            
        ?>
      </section>
    </section>
    <!--main content end-->
	<?php include_once('footer.php');?>
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script type="text/javascript">
    // $(document).ready(function() {
      
    // });
  </script>
  <script type="application/javascript">


    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      // $("#date-popover").popover({
      //   html: true,
      //   trigger: "manual"
      // });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

<?php

    if($_GET['halaman'] == "monitoring_ssw"){
      include_once "monitoring_ssw.php";
    } elseif($_GET['halaman'] == "monitoring_realtime"){
      include_once "monitoring_ssw_realtime.php";
    } 

    // echo $_GET[halaman];

?>

</html>
