<?php

    $db_connection = pg_connect("host=172.18.1.94 dbname=mon user=postgres password=dba.surabaya@2020");

?>

<!-- BASIC FORM VALIDATION -->
<div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Tambah Database</h4>
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form" method="post">
                <div class="form-group">
                  <label class="col-lg-2 control-label">Alamat IP Database</label>
                  <div class="col-lg-5">
                    <input type="text" name="alamat_ip" value="<?php echo $_POST["alamat_ip"];?>" id="alamat_ip" class="form-control" placeholder="Alamat Ip Database">
                  </div>
                </div>
                <div class="form-group ">
                  <label class="col-lg-2 control-label">Nama Database</label>
                  <div class="col-lg-5">
                  <select name="database" id="database" class="form-control">
                    <option value="">---Pilih Database---</option>
                    <option value="mysql">MySQL</option>
                    <option value="postgres">PostgresSQL</option>
                    <option value="oracle">Oracle</option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Satatus Database</label>
                  <div class="col-lg-10">
                  <input type="radio" name="status" value="online" id="status"> Online &nbsp;<input type="radio" nama="status" value="offline" id="status"> Offline
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Keterangan</label>
                  <div class="col-lg-5">
                  <textarea class="form-control" name="keterangan" id="keterangan" rows="5" placeholder="Keterangan"><?php echo $_POST["keterangan"];?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <!-- <button class="btn btn-theme" type="submit" name="edit">Edit</button> -->
                    <input name="tambah" id="tambah" type="submit" value="Tambah">
                  </div>
                </div>
                <?php
                    if($_POST["tambah"]){
                        $yt = "insert into t_database (ip_database, nama_database, status, keterangan) values ('".$_POST["alamat_ip"]."', '".$_POST["database"]."', '".$_POST["status"]."', '".$_POST["keterangan"]."')";
                        // echo $yt;
                        $it = pg_query($db_connection, $yt);

                        echo "<script>location.href='home.php?halaman=daftar_db';</script>";
                    }
                ?>
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->