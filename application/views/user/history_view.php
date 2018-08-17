<?php
session_start();
include('connection/conn.php');
?>
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
                                <div class="col-md-12 col-sm-12 col-xs-12"> 
                                    <div align="center">
                                        <h2>Histori Progress Unit <?php echo $this->session->userdata('username'); ?> </h2>
                                        <br>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-12 profile_left">
                                    <div class="x_panel">
                                        <div class="x_title" style="text-align:center">
                                            <h3>Index Pencapaian Unit <?php echo $this->session->userdata('username'); ?></h3>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <div style="text-align: center; margin-bottom: 17px">
                                                <span class="chart" data-percent="<?php echo $avg_unit[0]->rata_unit; ?>"><span class="percent"></span></span>persen
                                            </div>
                                        </div>
                                    </div>

                                    <div class="x_panel">
                                        <div class="x_title" style="text-align:center">
                                            <h3>Pencapaian Prioritas</h3>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <div id="priority1bar" style="height:370px;"></div>
                                            <div style="text-align:center"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h3>Progress Report Prioritas</h3>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <table class="table table-hover table-bordered" style="font-size:14px">
                                                <?php  
                                                if ($jumlahprogram!=0)  {
                                                ?>
                                                <thead>
                                                    <tr>
                                                        <th style="width:5%; text-align:center">#</th>
                                                        <th style="width:35%; text-align:center">Prioritas</th>
                                                        <th style="width:15%; text-align:center">Target</th>
                                                        <th style="width:15%; text-align:center">Satuan</th>
                                                        <th style="width:15%; text-align:center">Realisasi</th>
                                                        <th style="width:15%; text-align:center">Gap (%)</th>
                                                    </tr>
                                                </thead>
                                                <tbody> 
                                                    <?php 
                                                    $ppp=0; 
                                                    for ($i=0; $i <count($prioritas_unit) ; $i++) { 
                                                        $unit=$this->session->userdata('username');
                                                        $xmen=$prioritas_unit[$i]->cc_detail;
                                                        $sudah=mysqli_query($con, "SELECT * FROM cc_program where unit='$unit' and cc_detail='$xmen'");
                                                        $gap=mysqli_query($con, "SELECT * FROM cc_program_eval where input_user_c='$unit' and input_detail_c='$xmen'");
                                                        $isimen=mysqli_fetch_array($sudah);
                                                        $gapmen=mysqli_fetch_array($gap);
                                                    ?>
                                                    <tr>
                                                        <td scope="row" style="text-align:center; vertical-align:middle"><?php echo $i+1; ?></td>
                                                        <td><?php echo $prioritas_unit[$i]->input_detail_c?> </td>
                                                        <td style="text-align:center">
                                                            <?php if (!$prioritas_unit[$i]->target) echo "-"; else echo $prioritas_unit[$i]->target; $ppp=$ppp+$prioritas_unit[$i]->target;?>
                                                        </td> 
                                                        <td style="text-align:center">
                                                            <?php if (!$prioritas_unit[$i]->satuan) echo "-"; else echo $prioritas_unit[$i]->satuan; ?>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <?php if (!$prioritas_unit[$i]->input_realisasi) echo "-"; else echo $prioritas_unit[$i]->input_realisasi; ?>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <?php echo round($prioritas_unit[$i]->input_gap);?>
                                                        </td>
                                                    </tr>
                                                    <?php 
                                                    } 
                                                    ?>
                                                </tbody>
                                            </table>
                                            <?php 
                                            } else {
                                              echo "Saat ini tidak ada program berjalan";
                                            }
                                            ?>
                                            </div>
                                        </div>
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h3>Histori Capaian Prioritas</h3>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <?php 
                                    $p=count($programdefault);
                                    $cc=mysqli_query($con, "SELECT * FROM cc_program where status= 'Default' and unit='$unit'");
                                    $cc2=mysqli_query($con, "SELECT MAX(cc_time) as max FROM cc_program where status= 'Default'");
                                    $cc3=mysqli_query($con, "SELECT * FROM cc_program where status= 'Default' and unit='$unit'");
                                    if ($p>0) {
                                      $max=$max[0]->max;
                                      $bulan= 01;
                                    ?>
                                    <table class="table table-hover table-bordered" style="font-size:14px">
                                        <thead>
                                            <tr>
                                                <th style="width:5%; text-align:center; vertical-align:middle" rowspan="2" >#</th>
                                                <th style="width:35%; text-align:center; vertical-align:middle" rowspan="2">Program</th>
                                                <th style=" text-align:center" colspan="<?php echo $max; ?>">Capaian (%)</th>
                                            </tr>
                                            <tr>
                                                <?php
                                                $x=1;
                                                while ($x <= $max-9) {
                                                    if ($bulan>12) {
                                                        $bulan=$bulan-12;
                                                    }
                                                    if ($bulan==1) {
                                                        $bulan1='Agu';
                                                    }
                                                    if ($bulan==2) {
                                                        $bulan1='Sep';
                                                    }
                                                    if ($bulan==3) {
                                                        $bulan1='Okt';
                                                    }
                                                ?>
                                                <th style=" text-align:center"><?php echo $bulan1;?></th>
                                                <?php
                                                    $bulan++;
                                                    $x++;  
                                                }
                                                ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no=1;
                                            while ($cc_program=mysqli_fetch_array($cc)) {
                                                $xmen=$cc_program['cc_detail'];
                                            ?>
                                            <tr>
                                                <?php
                                                    $sudah = mysqli_query($con,"SELECT * FROM cc_program_eval JOIN cc_program_input on cc_program_eval.input_user_c=cc_program_input.input_user and cc_program_input.input_detail=cc_program_eval.input_detail_c where input_user='$unit' and input_detail='$xmen' ORDER BY input_id DESC");
                                                    $cc4 = mysqli_query($con,"SELECT * FROM cc_program where status= 'Default' and unit='$unit'");
                                                    $bulan2=mysqli_fetch_array($cc4 )['start_month'];
                                                    $bulan2= 19;
                                                ?>
                                                <th scope="row" style="text-align:center; vertical-align:middle"><?php echo $no++; ?></th>
                                                <td><?php echo $cc_program['cc_detail'];?></td>
                                                <?php
                                                $o2=1;
                                                while ($o2 <= $max-9) {
                                                ?>
                                                <td style="text-align:center">
                                                    <?php 
                                                    $bulan2++;
                                                    if ($bulan2>12) {
                                                        $bulan2=$bulan2-12;
                                                    }
                                                    if ($bulan2<10) {
                                                        $bulan2="0".$bulan2;
                                                    }
                                                    
                                                    $pro=$cc_program['cc_detail'];
                                                    $cc5=mysqli_query($con, "SELECT * FROM cc_program_eval where input_user_c='$unit' and input_bulan='$bulan2' and input_detail_c='$pro'");
                                                    $isi5=mysqli_fetch_array($cc5)['input_realisasi_'];
                                                  
                                                    if ($isi5==null && empty($isi5)) {
                                                        echo "-";
                                                    } else {
                                                        echo $isi5;
                                                    }
                                                    ?>
                                                </td>
                                                <?php
                                                $o2++;
                                                }
                                                ?>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                    <?php 
                                    } else {
                                      echo "Saat ini tidak ada program berjalan";
                                    }
                                    ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <br>
                                    <a href="<?php echo base_url()?>user"><button type="submit" class="btn btn-primary" >Kembali</button></a>
                                </div>
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

   <script src="<?php echo base_url(); ?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url(); ?>js/plugins/jeditable/jquery.jeditable.js"></script>

    <script src="<?php echo base_url(); ?>js/plugins/dataTables/datatables.min.js"></script>
    <script src="<?php echo base_url()?>js/plugins/jsKnob/jquery.knob.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url(); ?>js/inspinia.js"></script>
    <script src="<?php echo base_url(); ?>js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>js/plugins/iCheck/icheck.min.js"></script>

    <!-- Flot -->
    <script src="<?php echo base_url(); ?>js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url(); ?>js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url(); ?>js/plugins/flot/jquery.flot.pie.js"></script>
         
    <!-- ECharts -->
    <script src="<?php echo base_url(); ?>vendors/echarts/dist/echarts.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/echarts/map/js/world.js"></script>
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
    <!-- easy-pie-chart -->
    <script src="<?php echo base_url();?>js/jquery.easypiechart.min.js"></script>
  <script>
  $(function() {
    $('.chart').easyPieChart({
      easing: 'easeOutElastic',
      delay: 3000,
      barColor: '#26B99A',
      trackColor: '#F5F7FA',
      scaleColor: false,
      lineWidth: 20,
      trackWidth: 20,
      lineCap: 'butt',
      onStep: function(from, to, percent) {
        $(this.el).find('.percent').text(Math.round(percent));
      }
    });
  });
  </script>


  <script type="text/javascript">
    var theme = {
      color: [
      '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
      '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
      ],

      textStyle: {
        fontFamily: 'Arial, Verdana, sans-serif'
      }
    };

    var echartGauge = echarts.init(document.getElementById('priority1bar'), theme);

    echartGauge.setOption({
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['SKI']
    },
    toolbox: {
        show : true,
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            data : ['P1', 'P2', 'P3'], 
        }
    ],
    yAxis : [
        {
            type : 'value',
            min : 0,
            max : 100
        }
    ],
    series : [
        {
            name:'nama',
            type:'bar',

            // <?php 
            // // if (count($pencapaian_unit) = null) {
            // //   $val1 = 0;
            // //   $val2 = 0;
            // //   $val3 = 0;
            // if (count($pencapaian_unit) = 1) {
            //   $val1 = $pencapaian_unit[0];
            //   $val2 = 0;
            //   $val3 = 0;
            // } else if (count($pencapaian_unit) = 2) {
            //   $val1 = $pencapaian_unit[0];
            //   $val2 = $pencapaian_unit[1];
            //   $val3 = 0;
            // } else if (count($pencapaian_unit) = 3) {
            //   $val1 = $pencapaian_unit[0];
            //   $val2 = $pencapaian_unit[1];
            //   $val3 = $pencapaian_unit[2];
            // } else {
            //   $val1 = 0;
            //   $val2 = 0;
            //   $val3 = 0;
            // }

            // ?>

            // <?php 
            //   if($pencapaian_unit[0]->input_realisasi_ == NULL){
            //     $val1 = 0;
            //     $val2 = 0;
            //     $val3 = 0;
            //   }

            //   if($pencapaian_unit[0]->input_realisasi_ != NULL && $pencapaian_unit[1]->input_realisasi_ == NULL){
            //     $val1 = $pencapaian_unit[0];
            //     $val2 = 0;
            //     $val3 = 0;
            //   }

            //   if($pencapaian_unit[0]->input_realisasi_ != NULL && $pencapaian_unit[1]->input_realisasi_ != NULL && $pencapaian_unit[2]->input_realisasi_ == NULL){
            //     $val1 = $pencapaian_unit[0]->input_realisasi_;
            //     $val2 = $pencapaian_unit[1]->input_realisasi_;
            //     $val3 = 0;
            //   }

            //   if($pencapaian_unit[0]->input_realisasi_ != NULL && $pencapaian_unit[1]->input_realisasi_ != NULL && $pencapaian_unit[2]->input_realisasi_ != NULL){
            //     $val1 = $pencapaian_unit[0]->input_realisasi_;
            //     $val2 = $pencapaian_unit[1]->input_realisasi_;
            //     $val3 = $pencapaian_unit[2]->input_realisasi_;
            //   }
            // ?>



            data:[<?php echo 75;?>, <?php echo 64;?>, <?php echo 90;?>],
            markPoint : {
                data : [
                    {type : 'max', name: 'max'},
                    {type : 'min', name: 'min'},
                    {xAxis : '2', yAxis: 4.9, name: 'min', value: 4.9}
                ]
            },
        },
    ]
  });
  </script>


</body>
</html>
