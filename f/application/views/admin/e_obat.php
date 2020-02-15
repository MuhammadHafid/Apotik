<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Produk
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
        <form class="form-horizontal" action="<?php echo base_url('admin/oteote/') ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $key->kode ?>">
          <div class="box-body">

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Nama Obat</label>

              <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="inputEmail3" required="" value="<?php echo $key->nama ?>">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Stok</label>

              <div class="col-sm-10">
                <input type="number" name="stok" class="form-control" id="inputPassword3" required="" value="<?php echo $key->stok ?>">
              </div>
            </div>

            <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Kategori</label>
                        <div class="col-sm-10">
                          <select id="select2" name="kategori" class="form-control select2 select2-hidden-accessible" required="" style="width:100%" tabindex="-1" aria-hidden="true">
                                                            <option value="obat dokter">Obat Dokter</option>
                                                              <option value="obat bebas">Obat Bebas</option>
                          </select><span class="select2 select2-container select2-container--default select2-container--below select2-container--open" dir="ltr" style="width: 100%;"><span class="selection"></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        </div>
                        

                    </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">suplier</label>

              <div class="col-sm-10">
                <input type="text" name="suplier" class="form-control" id="inputPassword3" required="" value="<?php echo $key->suplier ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Tgl Expired</label>

              <div class="col-sm-10">
                <input type="date" name="tgli" class="form-control" id="inputPassword3" required="" value="<?php echo $key->tgli ?>">
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
