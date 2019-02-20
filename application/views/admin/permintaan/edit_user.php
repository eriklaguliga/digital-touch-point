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
        <li class="active">Edit Request Data</li>
      </ol>
    </section>

    <!-- Main content -->
<section class="content">
   <div class="row">
      <div class="col-xs-12">
         <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <?php
               echo form_open_multipart('admin/permintaan/edit');
               echo form_hidden('id_nota', $nota['id_nota']);
               ?>
            <div class="box-body">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="form-group" style="margin-top:10px">
                        <span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">Nomor Nota :</span>
                        <div class="col-xs-4">
                           <input class="form-control" type="text" id="onlynumber" readonly="" value="<?php echo $nota['nomor'] ?>"  name="nomor" maxlength="11" autofocus required />
                        </div>
                        <span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">Action &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span>
                        <div class="col-xs-3" style="margin-left:-50px;">
                           <!--<input class="form-control" value="<?php echo $nota['disposisi'] ?>"  type="text" id="onlynumber" name="disposisi" maxlength="15" autofocus required />
                              -->
                           <select id="approval" name="status" class="form-control">
                              
                              <option value="Approved" > Approved </option>
                              <option value="Return" > Return </option>
                              <option value="Rejected" > Rejected </option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12" style="margin-top:10px">
                     <div class="form-group">
                        <span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">Sub Divisi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span>
                        <div class="col-xs-4">
                           <?php echo cmb_dinamis('id_seksi','tbl_seksi','nama_seksi','id_seksi',$nota['id_seksi'])?>
                        </div>
                        <span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">Tanggal &nbsp;&nbsp;:</span>
                        <div class="col-xs-3" style="margin-left:-50px;">
                           <input class="form-control" type="text" value="<?php echo $nota['tanggal'] ?>" readonly="" id="onlynumber" name="tanggal" maxlength="11" autofocus required />
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12" style="margin-top:10px">
                     <div class="form-group">
                        <span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">Oleh &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span>
                        <div class="col-xs-3">
                           <input class="form-control" type="text" value="<?php echo $this->session->userdata('username'); ?>" readonly="" id="user" name="namauser" maxlength="50" autofocus required />
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12" style="margin-top:15px">
                     <div class="form-group">
                        <span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">Isi Nota &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span>
                        <div class="col-xs-4">
                           <textarea class="textarea" name="isi_nota" placeholder="isi nota"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $nota['isi_nota'] ?></textarea>
                        </div>
                        <span class="col-xs-2" style="margin-left:10px; margin-bottom:15px; font-size:18px">Isi Catatan : </span>
                        <div class="col-xs-4" style="margin-left:-50px;">
                           <textarea class="textarea" name="isi_catatan" placeholder="Isi Catatan"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                     </div>
                  </div>

                  <div class="col-xs-12" style="margin-top:15px; margin-bottom: 10px">
                     <div class="form-group">
                        <span class="col-xs-4 col-xs-push-2" style="margin-left:20px; margin-top:-20px; font-size:14px; font-style:italic; color:#888">*Format file:jika di perlukan .jpg / .jpeg / .png/.docx</span>
                     </div>
                  </div>

                  <div class="col-xs-12" style="margin-top:15px">
                     <div class="form-group">
                        <span class="col-xs-2" style="margin-left:410px; margin-bottom:15px; font-size:18px"></span>
                        <div class="col-xs-2">
                           <input type="submit" name="submit" class="btn btn-lg btn-block btn-success fa fa-save" value="Simpan" />
                        </div>
                        <div class="col-xs-2 ">
                          <a href="<?php echo site_url('admin/permintaan') ?>"><input type="submit" name="submit" class="btn btn-danger btn-block btn-flat" value="Batal" /></a>
                        </div>
                     </div>
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <?php echo form_close(); ?>
         </div>
         <!-- /.box -->
      </div>
      <!-- /.col -->
   </div>
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
              
              <!--/.direct-chat -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
              
            </div>
            <!-- /.col -->
          </div>
          <!-- /.box -->
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
</section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view('admin/footer') ?>
</body>
</html>
