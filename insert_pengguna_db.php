<?php

    $db_connection = pg_connect("host=172.18.1.94 dbname=mon user=postgres password=dba.surabaya@2020");

?>

<!-- BASIC FORM VALIDATION -->
<div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Tambah Pengguna Database</h4>
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form" method="post">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Alamat IP Database</label>
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

              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->