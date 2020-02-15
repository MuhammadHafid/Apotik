<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Penyuplai
      <small>Apotek Sehat</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    <div class="col-md-14">
      <!-- Horizontal Form -->
      <div class="box box-info">
        <!-- /.box-header -->
        <!-- form start -->
        <?php foreach ($user as $key) { ?>
        <form class="form-horizontal" action="<?php echo base_url('admin/tahu/') ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $key->id_bar?>">
          <div class="box-body">

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Nama Penyuplai</label>

              <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="inputEmail3" required="" value="<?php echo $key->nama ?>">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

              <div class="col-sm-10">
                <input type="text" name="alamat" class="form-control" id="inputPassword3" required="" value="<?php echo $key->alamat ?>">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Telepon</label>

              <div class="col-sm-10">
                <input type="text" name="telp" class="form-control" id="inputPassword3" required="" value="<?php echo $key->telp ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Barang</label>

              <div class="col-sm-10">
                <input type="number" name="j_barang" class="form-control" id="inputPassword3" required="" value="<?php echo $key->j_barang ?>">
              </div>
            </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">Simpan</button>
          </div>
        </form>
        <?php } ?>
      </div>
    </div>
  </section>
</div>
