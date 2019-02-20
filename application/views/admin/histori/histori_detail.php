<!DOCTYPE html>
<html>
  <?php $this->load->view('admin/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('admin/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/leftbar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">History</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        
      </div>
      <!-- /.row -->

      <div class="col-xs-15">
   <div class="box">
      <div class="box-header">
         <h3 class="box-title">Data Request</h3>
         
         <?php
            if ($this->session->flashdata('Berhasil')) {
                echo "<div class='alert alert-info'>";
                echo $this->session->flashdata('Berhasil');
                echo "</div>";
            } elseif ($this->session->flashdata('edit')) {
                echo "<div class='alert alert-warning'>";
                echo $this->session->flashdata('edit');
                echo "</div>";
            } elseif ($this->session->flashdata('hapus')) {
                echo "<div class='alert alert-warning bg-danger'>";
                echo $this->session->flashdata('hapus');
                echo "</div>";
            } elseif ($this->session->flashdata('file')) {
                echo "<div class='alert alert-warning bg-danger'>";
                echo $this->session->flashdata('file');
                echo "</div>";
            }
            ?>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="form-group" style="margin-top:10px">
                        <span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">Nomor Nota :</span>
                        <div class="col-xs-4">
                           <input class="form-control" type="text" readonly="" id="onlynumber" value="<?php echo $nota['nomor'] ?>"  name="nomor" maxlength="11"  required />
                        </div>
                        <span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">Status :</span>
                        <div class="col-xs-3">
                           <input class="form-control" value="<?php echo $nota['tobeuser'] ?>"  type="text" readonly="" id="onlynumber" name="disposisi" maxlength="15"  required />
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12" style="margin-top:10px">
                     <div class="form-group">
                        <span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">Sub Divisi :</span>
                        <div class="col-xs-4">
                           <?php echo cmb_dinamis('id_seksi','tbl_seksi','nama_seksi','id_seksi',$nota['id_seksi'])?>
                        </div>
                        <span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">Tanggal :</span>
                        <div class="col-xs-3">
                           <input class="form-control" type="text" value="<?php echo $nota['tanggal'] ?>" readonly="" id="onlynumber" name="tanggal" maxlength="11"  required />
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12" style="margin-top:10px">
                     <div class="form-group">
                        <span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">Oleh :</span>
                        <div class="col-xs-3">
                           <input class="form-control" type="text" value="<?php echo $this->session->userdata('username'); ?>" readonly="" id="user" name="namauser" maxlength="50"  required />
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12" style="margin-top:15px">
                     <div class="form-group">
                        <span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">Isi Nota : </span>
                        <div class="col-xs-4">
                           <textarea disabled class="textarea" name="isi_nota" placeholder="isi nota"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $nota['isi_nota'] ?></textarea>
                        </div>
                     </div>
                  </div>

                  <div class="col-xs-12" style="margin-top:15px; margin-bottom: 10px">
                     <div class="form-group">
                        <span class="col-xs-4 col-xs-push-2" style="margin-left:20px; margin-top:-20px; font-size:14px; font-style:italic; color:#888">*Format file:jika di perlukan .jpg / .jpeg / .png/.docx</span>
                     </div>
                  </div>

                  <div class="box-body">
                     <table id="example1" class="table table-bordered table-hover">
                        <thead>
                           <tr>
                              <th>No</th>
                              <th>Nomor Nota</th>
                              <th>Nama</th>
                              <th>Status</th>
                              <th>Tanggal</th>
                              <th>Lama Proses</th>
                              <th>Catatan</th>
                           </tr>
                        </thead>
                        <tbody>
                           
                           <?php
                              $no = 1;
                              foreach ($histori as $h):
                                  ?>
                           <tr>
                              <td><?php echo $no ?></td>
                              <td><?php echo $h->nomor ?></td>
                              <td><?php echo $h->username ?></td>
                              <td><?php echo $h->tobeuser ?></td>
                              <td><?php echo $h->tgl ?></td>
                              <td><?php echo $h->durasi ?></td>
                              <td><?php echo $h->catatan ?></td>
                           </tr>
                           <?php $no++; ?>
                           <?php endforeach; ?>
                        </tbody>
                     </table>
                  </div>
                  
                  <div class="col-xs-12" style="margin-top:15px">
                     <div class="form-group">
                        
                        
                     </div>
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </div>
      <!-- /.box-body -->
   </div>
   <!-- /.box -->
</div>
        <!-- /.col -->
      
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <!-- MAP & BOX PANE -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Visitors Report</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="row">
                <div class="col-md-9 col-sm-8">
                  <div class="pad">
                    <!-- Map will be created here -->
                    <div id="world-map-markers" style="height: 325px;"></div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-4">
                  <div class="pad box-pane-right bg-green" style="min-height: 280px">
                    <div class="description-block margin-bottom">
                      <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                      <h5 class="description-header">8390</h5>
                      <span class="description-text">Visits</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description-block margin-bottom">
                      <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                      <h5 class="description-header">30%</h5>
                      <span class="description-text">Referrals</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description-block">
                      <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                      <h5 class="description-header">70%</h5>
                      <span class="description-text">Organic</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="row">
            <div class="col-md-6">
              
            </div>
            <!-- /.col -->

            <div class="col-md-6">
              
              <!--/.box -->
            </div>
            <!-- /.col -->
          </div>
          
        </div>
        <!-- /.col -->

        <div class="col-md-4">
          <!-- Info Boxes Style 2 -->
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Inventory</span>
              <span class="info-box-number">5,200</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
              <span class="progress-description">
                    50% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Mentions</span>
              <span class="info-box-number">92,050</span>

              <div class="progress">
                <div class="progress-bar" style="width: 20%"></div>
              </div>
              <span class="progress-description">
                    20% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Downloads</span>
              <span class="info-box-number">114,381</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
              <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Direct Messages</span>
              <span class="info-box-number">163,921</span>

              <div class="progress">
                <div class="progress-bar" style="width: 40%"></div>
              </div>
              <span class="progress-description">
                    40% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php $this->load->view('admin/footer') ?>
</body>
</html>
