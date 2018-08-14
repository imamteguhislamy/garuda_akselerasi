<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Garuda Indonesia | Login</title>

    <style> 
        .btn-xlarge-dim {
          width: 120px !important;
          height: 120px !important;
          font-size: 42px !important;
        }

        .font-tombol{
            font-size: 30px!important;
            padding-top: 0px!important;
        }
    </style>
    
    <link href="<?php echo base_url(); ?>bootstrap-login/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bootstrap-login/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>bootstrap-login/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>bootstrap-login/css/style.css" rel="stylesheet">


</head>

<body class="gray-bg">

 

<div class="row">
    <div class="col-lg-4 col-lg-offset-4 text-center loginscreen  animated fadeInDown">
    <div>

        <h1 class="logo-name">GA</h1>

    </div>
    <h3>Selamat datang di Performance Management System</h3>
            <p>Memungkinkan Anda bla bla bla bla bbla  </p>
        <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
  
    <p>Login in. To see it in action.</p>  
</div>
</div>

<div class="row">
    <div class="col-lg-12 text-center animated fadeInDown">

                <div class="ibox float-e-margins">

                        <h3 class="font-bold">Pilih Session Login Anda !</h3>
                        <div class="row">       
                                <button class="btn btn-danger dim btn-large-dim btn-outline" type="button"  data-toggle="modal" data-target="#Admin">
                                  <i class="fa fa-desktop"></i> 
                                <center><h5>Admin</h5></center>
                                </button>
                                 
                                <button class="btn btn-primary dim btn-large-dim btn-outline" type="button"  data-toggle="modal" data-target="#Unit">
                                    <i class="fa fa-users"></i>
                                    <center><h5>Unit</h5></center>
                                </button>
                                     
                </div>
            </div>

            <blockquote>
                <p>70% of Strategic Failures are <strong class="text-muted">due to Poor Execution </strong> of Leadership.</p>
                <small><strong>Ram Charan</strong> <!-- in <cite title="" data-original-title="">Book name</cite> --></small>
            </blockquote>
</div>
</div>
                        
                        <!-- Admin-->
                            <div class="modal inmodal fade" id="Admin" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content  float-e-margins">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Admin </h4>
                                            <small class="font-bold">Login sebagai Admin </small>
                                        </div>
                                            <form action="<?php echo base_url()?>login/admin" method="POST">
                                                <div class="modal-body float-e-margins">
                                                    <center><i class="fa fa-plane fa-5x" style="opacity: 0.5"></i></center>
                                                    <br>
                                                    <p>Dengan login sebagai Admin Anda bisa menentukan SUK</p>

                                                    <div class="form-group">
                                                        <label>Username Admin</label>
                                                        <input type="text" class="form-control" placeholder="Username" name="username" required="" autocomplete="off">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password Admin</label>
                                                        <input type="password" class="form-control" placeholder="password" name="password" required="" autocomplete="off">
                                                    </div>
                                                </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="type" value="Admin">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        <!-- Modals Unit -->
                            <div class="modal inmodal fade" id="Unit" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content  float-e-margins">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Unit </h4>
                                            <small class="font-bold">Login sebagai Unit </small>
                                        </div>
                                            <form action="<?php echo base_url()?>login/unit" method="POST">
                                                <div class="modal-body float-e-margins">
                                                    <center><i class="fa fa-users fa-5x" style="opacity: 0.5"></i></center>
                                                    <br>
                                                    <p>Dengan login sebagai Unit Anda bisa memilih SUK dan menentukan SKI</p>

                                                    <div class="form-group">
                                                        <label>Unit Code</label>
                                                        <input type="text" class="form-control" placeholder="Unit Code" name="username" required="" autocomplete="off">
                                                    </div>
                                                     <div class="form-group">
                                                        <label>Unit Password</label>
                                                        <input type="password" class="form-control" placeholder="Unit Password" name="password" required="" autocomplete="off">
                                                    </div>
                                                </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="type" value="unit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url(); ?>bootstrap-login/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap-login/js/bootstrap.min.js"></script>

</body>

</html>
