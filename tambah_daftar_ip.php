<?php

    $db_connection = pg_connect("host=172.18.1.94 dbname=mon user=postgres password=dba.surabaya@2020");

?>

<!-- BASIC FORM VALIDATION -->
<div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Tambah IP Pengguna</h4>
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form" method="post">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Nama</label>
                  <div class="col-lg-10">
                    <input type="text" name="nama" value="<?php echo $_POST["nama"];?>" id="f-name" class="form-control">
                  </div>
                </div>
                <div class="form-group has-error">
                  <label class="col-lg-2 control-label">IP</label>
                  <div class="col-lg-10">
                    <input type="text" name="ip" value="<?php echo $_POST["ip"];?>" placeholder="" id="l-name" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <!-- <button class="btn btn-theme" type="submit" name="edit">Edit</button> -->
                    <input name="tambah" id="tambah" type="submit" value="Tambah">
                  </div>
                </div>

<?php

    if($_POST['tambah']){

        if($_GET['edit_ip'] == "ssw"){
            $db_name = "ssw_234";
        }else if($_GET['edit_ip'] == "gakin"){
            $db_name = "gakin_0_245";
        }else if($_GET['edit_ip'] == "esurat"){
            $db_name = "esurat_233";
        }else if($_GET['edit_ip'] == "tekocak"){
            $db_name = "tekocak_34";
        }else if($_GET['edit_ip'] == "bumil"){
            $db_name = "bumil_191";
        }else if($_GET['edit_ip'] == "monev"){
            $db_name = "monev_50";
        }

        $op = "insert into master_pengguna_ip (nama, ip, db) values ('".$_POST["nama"]."', '".$_POST["ip"]."', '".$db_name."')";
        // echo $op."<br>";
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