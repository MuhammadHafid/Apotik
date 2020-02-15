<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Apotek Sehat
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Obat</h3> &nbsp;
            <small>Apotek Sehat</small>
            <div class="col-xl-3 pull-right">
            <a href="<?php echo base_url('admin/addobat') ?> " class="btn btn-block btn-success pull-right" data-toggle="modal"><b><i class="fa fa-fw fa-plus-square"></i>Add</b></a>
          </div>
          </div>
          


          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr align="center" >
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Stok</th>
                  <th>Kategori</th>
                  <th>Supplier</th>
                  <th>Tgl Expired</th>
                  <th width="25%">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach($data as $c){ 
                  ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $c->nama ?></td>
                    <td><?php echo $c->stok ?></td>
                    <td><?php echo $c->kategori ?></td>
                    <td><?php echo $c->suplier ?></td>
                    <td><?php echo $c->tgli ?></td>
                    <td align="center">
                      <a type="button" href="<?php echo base_url(). 'admin/edit/'. $c->kode?>" class="btn bg-blue smallbtn"><i class="fa fa-fw fa-edit"></i></a>
                      <a type="button" href="<?php echo base_url(). 'admin/del/'. $c->kode; ?>" class="btn bg-red smallbtn"><i class="fa fa-fw fa-close"></i></a>
                    </td>
                   
                  </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>