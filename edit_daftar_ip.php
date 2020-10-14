<?php

    $db_connection = pg_connect("host=172.18.1.94 dbname=mon user=postgres password=dba.surabaya@2020");

    $it = "select nama, ip, db, id_ip from master_pengguna_ip where id_ip = ".$_GET['id']." order by nama asc";
    // echo $it."<br/>";
    $result = pg_query($db_connection, $it);
    $output = pg_fetch_row($result);
    // var_dump($output);
        ?>
<!-- BASIC FORM VALIDATION -->
<div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Edit IP Pengguna</h4>
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form" method="post">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Nama</label>
                  <div class="col-lg-10">
                    <input type="text" name="nama" value="<?php echo $output[0];?>" id="f-name" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group has-error">
                  <label class="col-lg-2 control-label">IP</label>
                  <div class="col-lg-10">
                    <input type="text" name="ip" value="<?php echo $output[1];?>" placeholder="" id="l-name" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <!-- <button class="btn btn-theme" type="submit" name="edit">Edit</button> -->
                    <input name="edit" id="edit" type="submit" value="Edit">
                  </div>
                </div>

<?php

    if($_POST['edit']){
        $op = "update master_pengguna_ip set ip='".$_POST['ip']."' where id_ip = ".$_GET['id']."";
        // echo $op;
        $hasil = pg_query($db_connection, $op);
        // var_dump($hasil);

        // echo "<script>window.alert(\"Data Sudah Tersimpan\");</script>";
        if($_GET['edit_ip'] == "ssw"){
            echo "<script>location.href='home.php?halaman=daftar_ip&db=ssw';</script>";
        }else if($_GET['edit_ip'] == "gakin"){
            echo "<script>location.href='home.php?halaman=daftar_ip&db=gakin';</script>";
        }else if($_GET['edit_ip'] == "esurat"){
            echo "<script>location.href='home.php?halaman=daftar_ip&db=esurat';</script>";
        }else if($_GET['edit_ip'] == "tekocak"){
            echo "<script>location.href='home.php?halaman=daftar_ip&db=tekocak';</script>";
        }else if($_GET['edit_ip'] == "bumil"){
            echo "<script>location.href='home.php?halaman=daftar_ip&db=bumil';</script>";
        }else if($_GET['edit_ip'] == "monev"){
            echo "<script>location.href='home.php?halaman=daftar_ip&db=monev';</script>";
        }else if($_GET['edit_ip'] == "wdh_40"){
          echo "<script>location.href='home.php?halaman=daftar_ip&db=wdh_40';</script>";
      }
		
    }

?>

              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->