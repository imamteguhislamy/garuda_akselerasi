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
                                <a href="<?php echo base_url()?>user/logout" style="color:black"><i class="fa fa-sign-out"></i> Log out</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="container " style="color:black">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h3>Garuda Acceleration Program</h3> 
                        <br>
                        <div class="x_panel" style="border-top: 6px solid #4F8BB1;">
                            <div class="x_content">

                                <!-- DAFTAR SASARAN UTAMA DAN PRIORITAS -->
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div align="center">
                                        <h2>Daftar Sasaran Utama dan Prioritas <br> Unit <?php echo $this->session->userdata('username'); ?> </h2>
                                        <br>
                                    </div>

                                    <!-- SASARAN UTAMA -->
                                    <div class="x_panel ui-ribbon-container ">
                                        <div class="x_title">
                                            <h3>Sasaran Utama</h3>
                                        </div>
                                        <div class="x_content">
                                            <?php 
                                            if ($listsasaran!=NULL) { 
                                            ?>
                                            <p style="font-size: 18px"><?php echo $listsasaran[0]->nama_sasaran; ?> </p>
                                            <?php 
                                            } else { 
                                            ?>
                                            <p style="font-size: 18px">Belum ada sasaran utama</p>
                                            <button type="button" class="btn btn-block btn-outline btn-primary" data-toggle="modal" data-target="#myModal">Buat Sasaran Utama</button>
                                            <?php
                                            }
                                            ?>
                                            
                                            <!-- MODAL BUAT SASARAN UTAMA -->
                                            <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content animated bounceInRight">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <span aria-hidden="true">&times;</span>
                                                                <span class="sr-only">Close</span>
                                                            </button>
                                                            <i class="fa fa-laptop modal-icon"></i>
                                                            <h4 class="modal-title">Buat Sasaran Utama</h4>
                                                            <small class="font-bold">Sasaran utama yang ingin dicapai oleh unit anda</small>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="ibox float-e-margins">
                                                                    <div class="ibox-content">
                                                                        <?php 
                                                                        echo form_open_multipart('user/tambah_sasaran')
                                                                        ?>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <h4>Nama Sasaran Utama</h4>
                                                                                    <input type="text" class="form-control" name="nama_sasaran" autocomplete="off" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group" id="data_1">
                                                                                    <label>Mulai Pelaksanaan</label>
                                                                                    <div class="input-group date">
                                                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" class="form-control" name="waktu_pelaksanaan" required>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group" id="data_1">
                                                                                    <label>Batas Pelaksanaan</label>
                                                                                    <div class="input-group date">
                                                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="date" class="form-control" name="batas_pelaksanaan" required>
                                                                                    </div>
                                                                                </div>
                                                                            </div>                      
                                                                            <div class="col-md-12" align="center">
                                                                                <div class="hr-line-dashed"></div>
                                                                                <button type="submit" class="btn btn-primary btn-lg" style="width: 100%" ><i class="fa fa-paper-plane "></i>   Submit</button>
                                                                                <?php echo form_close()?>  
                                                                            </div>
                                                                        </div> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END MODAL BUAT SASARAN UTAMA -->
                                        </div>
                                    </div>
                                    <!-- END SASARAN UTAMA -->

                                    <!-- DAFTAR PRIORITAS -->
                                    <div class="x_panel ui-ribbon-container ">
                                        <div class="x_title">
                                            <h3>Daftar Prioritas</h3>
                                        </div>
                                        <div class="x_content">
                                            <table class="table  table-hover dataTables-example" style="font-size:14px">
                                                <thead>
                                                    <tr>
                                                        <th style="width:5%">#</th>
                                                        <th style="width:40%">Prioritas</th>
                                                        <th style="width:20%; text-align:center">Target</th>
                                                        <th style="width:20%; text-align:center">Satuan</th>
                                                        <th style="width:20%; text-align:center">Opsi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    if ($program!=NULL) {
                                                        for ($i=0; $i < count($program) ; $i++) {
                                                    ?> 
                                                    <tr>
                                                        <th scope="row"><?php echo $i+1; ?></th>
                                                        <td><?php echo $program[$i]->cc_detail; ?></td>
                                                        <td style="text-align:center"><?php echo $program[$i]->target;?></td> 
                                                        <td style="text-align:center"><?php echo $program[$i]->satuan;?></td>
                                                        <td class=" last" style="vertical-align: middle; text-align: center; ">
                                                            <a href="<?php echo base_url()?>user/evaluasi_data/<?php echo $program[$i]->cc_id?>">
                                                                <button type="submit" class="btn btn-primary btn-s">Update</button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        } 
                                                    } else {
                                                    ?>
                                                    <tr>
                                                        <th scope="row"><?php echo 1; ?></th>
                                                        <td> Belum Ada Prioritas </td>
                                                        <td style="text-align:center">-</td> 
                                                        <td style="text-align:center">-</td>
                                                        <td class=" last" style="vertical-align: middle; text-align: center; ">
                                                            <button type="button" class="btn btn-success table-hover btn-s" data-toggle="modal" data-target="#myModal2">Tambah</button>

                                                            <!-- MODEL TAMBAH DAFTAR PRIORITAS -->
                                                            <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content animated bounceInRight">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal">
                                                                                <span aria-hidden="true">&times;</span>
                                                                                <span class="sr-only">Close</span>
                                                                            </button>
                                                                            <i class="fa fa-laptop modal-icon"></i>
                                                                            <h4 class="modal-title">Buat Daftar Prioritas</h4>
                                                                            <small class="font-bold">Prioritas yang ingin dicapai untuk mendukung sasaran utama unit anda</small>
                                                                        </div>
                                                                        <div class="row">
                                                                            <!-- TAMBAH PRIORITAS 1 -->
                                                                            <div class="col-lg-12">
                                                                                <div class="ibox float-e-margins">
                                                                                    <div class="ibox-title">
                                                                                        <h5>Tambah Prioritas 1</h5>
                                                                                        <div class="ibox-tools">
                                                                                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ibox-content">
                                                                                        <?php 
                                                                                        echo form_open_multipart('user/tambah_prioritas')
                                                                                        ?>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <h5>Nama Prioritas 1</h5>
                                                                                                    <input type="text" class="form-control" name="program" autocomplete="off" required>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <h5>Deskripsi</h5>
                                                                                                    <textarea id="desc" name="deskripsi" class="resizable_textarea form-control input" required></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <h5>Target</h5>
                                                                                                    <input type="text" class="form-control" name="target" autocomplete="off" required>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <h5>Target Satuan</h5>
                                                                                                    <select id="heard" class="form-control col-md-7 col-xs-12" name="satuan" required>
                                                                                                        <option disabled selected hidden>Choose..</option>
                                                                                                        <option disabled ></option>
                                                                                                        <option value="Uang (Rp)">Uang (Rp)</option>
                                                                                                        <option value="Persentase (%)">Persentase (%)</option>
                                                                                                        <option value="Waktu (Hari)">Waktu (Hari)</option>
                                                                                                        <option value="Jumlah (kali)">Jumlah (kali)</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- END TAMBAH PRIORITAS 1 -->

                                                                            <!-- TAMBAH PRIORITAS 2 -->
                                                                            <div class="col-lg-12">
                                                                                <div class="ibox float-e-margins">
                                                                                    <div class="ibox-title">
                                                                                        <h5>Tambah Prioritas 2</h5>
                                                                                        <div class="ibox-tools">
                                                                                            <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ibox-content" style="display: none">
                                                                                        <?php 
                                                                                        echo form_open_multipart('user/tambah_prioritas')
                                                                                        ?>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <h5>Nama Prioritas 2</h5>
                                                                                                    <input type="text" class="form-control" name="program2" autocomplete="off" required>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <h5>Deskripsi</h5>
                                                                                                    <textarea id="desc" name="deskripsi2" class="resizable_textarea form-control input" required></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <h5>Target</h5>
                                                                                                    <input type="text" class="form-control" name="target2" autocomplete="off" required>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <h5>Target Satuan</h5>
                                                                                                    <select id="heard" class="form-control col-md-7 col-xs-12" name="satuan2" required>
                                                                                                        <option disabled selected hidden>Choose..</option>
                                                                                                        <option disabled ></option>
                                                                                                        <option value="Uang (Rp)">Uang (Rp)</option>
                                                                                                        <option value="Persentase (%)">Persentase (%)</option>
                                                                                                        <option value="Waktu (Hari)">Waktu (Hari)</option>
                                                                                                        <option value="Jumlah (kali)">Jumlah (kali)</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- END TAMBAH PRIORITAS 2 -->

                                                                            <!-- TAMBAH PRIORITAS 3 -->
                                                                            <div class="col-lg-12">
                                                                                <div class="ibox float-e-margins">
                                                                                    <div class="ibox-title">
                                                                                        <h5>Tambah Prioritas 3</h5>
                                                                                        <div class="ibox-tools">
                                                                                            <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ibox-content" style="display: none">
                                                                                        <?php 
                                                                                        echo form_open_multipart('user/tambah_prioritas')
                                                                                        ?>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <h5>Nama Prioritas 3</h5>
                                                                                                    <input type="text" class="form-control" name="program3" autocomplete="off" required>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <h5>Deskripsi</h5>
                                                                                                    <textarea id="desc" name="deskripsi3" class="resizable_textarea form-control input" required></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <h5>Target</h5>
                                                                                                    <input type="text" class="form-control" name="target3" autocomplete="off" required>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <h5>Target Satuan</h5>
                                                                                                    <select id="heard" class="form-control col-md-7 col-xs-12" name="satuan3" required>
                                                                                                        <option disabled selected hidden>Choose..</option>
                                                                                                        <option disabled ></option>
                                                                                                        <option value="Uang (Rp)">Uang (Rp)</option>
                                                                                                        <option value="Persentase (%)">Persentase (%)</option>
                                                                                                        <option value="Waktu (Hari)">Waktu (Hari)</option>
                                                                                                        <option value="Jumlah (kali)">Jumlah (kali)</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>              
                                                                                        </div>
                                                                                    </div> 
                                                                                </div>
                                                                            </div> 
                                                                            <!-- END TAMBAH PRIORITAS 3 -->

                                                                            <!-- SUBMIT -->
                                                                            <div class="col-lg-12">
                                                                                <div class="ibox-content">
                                                                                    <div class="hr-line-dashed"></div>
                                                                                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%" ><i class="fa fa-paper-plane "></i>   Submit</button>
                                                                                    <?php echo form_close() ?>  
                                                                                </div>
                                                                            </div>
                                                                            <!-- END SUBMIT -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <!-- END MODEL TAMBAH DAFTAR PRIORITAS -->

                                                        </td>
                                                    <?php
                                                    }
                                                    ?>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- END PRIORITAS -->
                                </div>
                                <!-- END DAFTAR SASARAN UTAMA DAN PRIORITAS -->

                                <!-- LIHAT HISTORI -->
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <a href="<?php echo base_url()?>user/history"><button type="submit" class="btn btn-primary btn-lg" style="width: 100%" >Lihat Histori</button></a>
                                </div>
                                <!-- END LIHAT HISTORI -->
                            </div>
                        </div>
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

</body>
</html>
