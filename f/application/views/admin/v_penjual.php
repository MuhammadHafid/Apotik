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
            <h3 class="box-title">Data Penjualan</h3> &nbsp;
            <small>Apotek Sehat</small>
            <div class="col-xl-3 pull-right">
            <a href="<?php echo base_url('admin/addpenjual/') ?> " class="btn btn-block btn-success pull-right" data-toggle="modal"><b><i class="fa fa-fw fa-plus-square"></i>Add</b></a>
          </div>
          </div>
          


          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr align="center" >
                  <th>ID Penjualan</th>
                  <th>Kasir</th>
                  <th>Tanggal Beli</th>
                  <th width="15%">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach($data as $c){ 
                  ?>
                  <tr>
                    <td><?php echo $c->id_t ?></td>
                    <td><?php echo $c->kasir ?></td>
                    <td><?php echo $c->tgl ?></td>
                    <td align="center">
                      <a type="button" href="<?php echo base_url(). 'admin/t_edit/'. $c->id_t; ?>" class="btn bg-blue smallbtn"><i class="fa fa-fw fa-edit"></i></a>
                      <a type="button" href="<?php echo base_url(). 'admin/klek/'. $c->id_t; ?>" class="btn bg-red smallbtn"><i class="fa fa-fw fa-close"></i></a>
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