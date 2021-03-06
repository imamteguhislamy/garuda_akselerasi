<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <title>Garuda Indonesia</title>

    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">

</head>
<body class="top-navigation">
    <div id="wrapper">
        <div id="page-wrapper" class="white-bg">
            <div class="row border-bottom white-bg">
                <nav class="navbar navbar-static-top" role="navigation">
                    <div class="navbar-header">
                        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <i class="fa fa-reorder"></i>
                        </button>
                        <a href="#" class="navbar-brand">Garuda Indonesia</a>
                    </div>
                    <div class="navbar-collapse collapse blue-bg" id="navbar">
                        <ul class="nav navbar-top-links navbar-right"  style="color:black">
                            <li>
                                <h4><i class="fa fa-user"></i> Unit <?php echo $this->session->userdata('username') ?></h4>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>user/logout" style="color:black">
                                    <i class="fa fa-sign-out"></i> Log out
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="container " style="color:black">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h3>Garuda Acceleration Program </h3>
                            <h4>Selamat Datang</h4>
                            <br/>
                            <div class="x_panel" style="border-top: 6px solid #4F8BB1;">
                                <div class="x_content" >
                                    <div class="col-md-12 col-sm-12 col-xs-12"> 
                                        <div align="center">
                                            <h2>Update Prioritas Unit <?php echo $this->session->userdata('username'); ?> </h2>
                                            <br>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="x_panel ui-ribbon-container ">
                                        <p style="font-size:14px"><strong>Nama Prioritas</strong>      : <?php echo $programunit->cc_detail?></p>
                                        <p style="font-size:14px"><strong>Deskripsi Prioritas</strong> : <?php echo $programunit->cc_desc?></p>
                                    </div>
                                    <div class="x_panel ui-ribbon-container ">
                                        <div class="x_title">
                                            <h2>Daftar Evaluasi</h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <?php 
                                            $a=count($daftarevaluasi);
                                            if ($a>=1) {
                                            ?>
                                            <table class="table table-hover table-bordered" style="font-size:14px">
                                                <thead style="font-size:12px">
                                                    <tr>
                                                        <th style="width:30%">Bulan</th>
                                                        <th style="width:10%">Target</th>
                                                        <th>Realisasi</th>
                                                        <th style="width:15%">Tingkat Pencapaian</th>
                                                        <th style="width:10%">Gap (%)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    for ($i=0; $i <$a ; $i++) { 
                                                    ?>
                                                    <tr style="font-size:12px">
                                                        <td><?php echo $daftarevaluasi[$i]->last_modified_c;?></td>
                                                        <td><?php echo $daftarevaluasi[$i]->target ?></td>
                                                        <td><?php echo $daftarevaluasi[$i]->input_realisasi ?></td>
                                                        <td><?php echo $daftarevaluasi[$i]->input_realisasi_ ?></td>
                                                        <td><?php echo $daftarevaluasi[$i]->input_gap ?></td>
                                                    </tr>
                                                    <?php 
                                                    } 
                                                    ?>
                                                </tbody>
                                            </table>
                                            <?php
                                            } else { 
                                            ?>
                                            <table class="table table-hover table-bordered" style="font-size:14px">
                                                <thead style="font-size:12px">
                                                    <tr>
                                                        <th style="width:30%">Bulan</th>
                                                        <th style="width:10%">Target</th>
                                                        <th>Realisasi</th>
                                                        <th style="width:15%">Tingkat Pencapaian</th>
                                                        <th style="width:10%">Gap (%)</th>
                                                    </tr>
                                                </thead>
                                                <tbody thead style="font-size:12px">
                                                    <tr> 
                                                        <td colspan="8" class="text-center">Anda Belum Melakukan Evaluasi Target</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <?php 
                                            } 
                                            ?>
                                        </div>
                                    </div>
                                    <?php 
                                    date_default_timezone_set("Asia/Jakarta");
                                    $mydate=getdate(date("U"));
                                    $date = "$mydate[month]";
                                    $mon2= substr($date,0,3);
                                    
                                    $a=count($daftarevaluasi);
                                    if ($a>0) {    
                                        $last_mod=$listevaluasi[$a-1]->last_modified_c;
                                        $mon= substr("$last_mod",0,3);
                                        if ($mon==$mon2) {
                                    ?>
                                    <a href="<?php echo base_url()?>user"><button type="button" name="submit" class="btn btn-primary" value="batal">Kembali</button></a>
                                    <?php
                                        echo '<script language="javascript">';
                                        echo 'alert("Anda Sudah Mengisi Target Bulan Ini")';
                                        echo '</script>';
                                      }  else { 
                                    ?>
                                    <div class="x_panel ui-ribbon-container ">
                                        <div class="x_title">
                                            <h2>Input Realisasi</h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <form id="demo-form2" action="<?php echo base_url()?>user/evaluasi_data/<?php echo $programunit->cc_id?>" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                                <input type="text" id="first-name" name="user" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $this->session->userdata('username');?>" style="display:none">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Prioritas</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="text" id="first-name" name="program" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $programunit->cc_detail?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Target Satuan</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="text" id="first-name" name="satuan" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $programunit->satuan?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Target</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="text" name="target" id="first-name" required class="form-control col-md-7 col-xs-12" value="<?php echo $programunit->target?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Capaian</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="number" lang="nb" name="capaian" id="first-name" required class="form-control col-md-7 col-xs-12" value="" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                        <button type="button" name="submit" class="btn btn-primary" value="batal">Kembali</button>
                                                        <button type="submit" name="submit" class="btn btn-success" value="simpan">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div> 
                                    <?php 
                                        }     
                                    } else {
                                        if ( $mon2=='Des') {
                                    ?>
                                    <a href="<?php echo base_url()?>user"><button type="button" name="submit" class="btn btn-primary" value="batal">Kembali</button></a>
                                    <?php
                                        echo '<script language="javascript">';
                                        echo 'alert("Anda tidak dapat mengisi pada Bulan Ini. Silahkan isi dimulai dari Bulan Januari")';
                                        echo '</script>';
                                    } else {
                                    ?>
                                    <div class="x_panel ui-ribbon-container ">
                                        <div class="x_title">
                                            <h2>Input Realisasi</h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <form id="demo-form2" action="<?php echo base_url()?>user/evaluasi_data/<?php echo $programunit->cc_id?>" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                                <input type="text" id="first-name" name="user" readonly class="form-control col-md-12 col-xs-12" value="<?php echo $this->session->userdata('username');?>" style="display:none">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Prioritas</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="text" id="first-name" name="program" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $programunit->cc_detail?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Target Satuan</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <input type="text" id="first-name" name="satuan" readonly class="form-control col-md-7 col-xs-12" value="<?php echo $programunit->satuan?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Target</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="text" name="target" id="first-name" required class="form-control col-md-7 col-xs-12" value="<?php echo $programunit->target?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Capaian</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="number" lang="nb" name="capaian" id="first-name" required class="form-control col-md-7 col-xs-12" value="" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                        <a href="<?php echo base_url()?>user"><button type="button" name="submit" class="btn btn-primary" value="batal">Kembali</button></a>
                                                        <button type="submit" name="submit" class="btn btn-success" value="simpan">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <?php 
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <br />
                        <br />
                    </div>
                </div>
            </div>
            <div class="footer">
                <div>
                    <strong>Copyright</strong> &copy; 2017 Garuda Indonesia. All rights reserved.
                </div>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url();?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/jeditable/jquery.jeditable.js"></script>

    <script src="<?php echo base_url();?>js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url();?>js/inspinia.js"></script>
    <script src="<?php echo base_url();?>js/plugins/pace/pace.min.js"></script>
    <style>
      .x_panel {
  position: relative;
  width: 100%;
  margin-bottom: 10px;
  padding: 10px 17px;
  display: inline-block;
  background: #fff;
  border: 1px solid #E6E9ED;
  -webkit-column-break-inside: avoid;
  -moz-column-break-inside: avoid;
  column-break-inside: avoid;
  opacity: 1;
  transition: all .2s ease; }
  .profile_title {
  background: #F5F7FA;
  border: 0;
  padding: 7px 0;
  display: -ms-flexbox;
  display: flex; }
    </style>
</body>
</html>
