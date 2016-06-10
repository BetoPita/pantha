<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title>Panthatravel</title>
    <base href="<?php echo base_url(); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="statics/css/bootstrap.css" rel="stylesheet" id="linkTema">
    <link href="statics/css/sb-admin.css" rel="stylesheet" id="linkTemasb">
    <link href="statics/css/plugins/morris.css" rel="stylesheet">
    <link href="statics/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="statics/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="statics/css/layout.css" rel="stylesheet">
    <link href="statics/css/datepicker3.css" rel="stylesheet">
    <link href="statics/css/airview.min.css" rel="stylesheet">
    <link href="statics/css/animate.css" rel="stylesheet">
    <link href="statics/css/select2.css" rel="stylesheet">
    <script src="statics/js/libraries/jquery.js"></script>
    <script src="statics/js/libraries/bootstrap.min.js"></script>
    <script src="statics/js/libraries/jquery.dataTables.min.js"></script>
    <script src="statics/js/libraries/General.js"></script>
    <script src="statics/js/libraries/bootbox.min.js"></script>
    <script src="statics/js/libraries/bootstrap-datepicker.js"></script>
    <script src="statics/js/libraries/selectize.js"></script>
    <script src="statics/js/libraries/vendor/tooltip.min.js"></script>
    <script src="statics/js/libraries/airview.min.js"></script>
    <script src="statics/js/libraries/bootstrap-notify.js"></script>
    <script src="statics/js/libraries/jquery.select2.min.js"></script>
    <script src="statics/js/libraries/jquery.numeric.js"></script>
    <script src="statics/js/libraries/jquery.blockUI.js"></script>
    <script src="statics/js/libraries/autoNumeric.js"></script>
     <script type="text/javascript" src="assets/js/moment.min.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.css"> 
   
    <script src="statics/js/libraries/renovando.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
   
     <link rel="shortcut icon" type="image/png" href="favicon.png" />
    
    <!--<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/croppic.css" rel="stylesheet">
    <script src="<?php echo base_url();?>croppic.min.js"></script> -->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>

              <ul class="nav navbar-right top-nav">
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> &nbsp;<?php echo $this->session->userdata("usuario")?>&nbsp;<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo site_url('login/logout')?>"><i class="fa fa-fw fa-power-off"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
             <div class="nav navbar-left top-nav ">
                <h3 style="color:white; margin-top: 14px;"><?php echo get_nombre_epmresa();?></h3>
            </div>
            <!-- Top Menu Items -->
           
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small fa fa-shopping-cart  screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <img src="<?php echo get_logo();?>" style="margin-left: 10px; padding-top: 10px; padding-bottom: 10px; width: 200px !important; height: 60px; !important" >
                    </li>
                    
                    <li >
                        <a href="<?php echo site_url();?>/banner/"><i class="fa fa-list-ul"></i> Banner</a>
                    </li>
                    <li>
                       <a href="<?php echo site_url();?>/imagenes/"> <i class="fa fa-inbox"></i> Imagenes</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/evento"><i class="fa fa-cubes"></i> Evento</a>
                    </li>

                    <!--<li>
                          <a href="<?php echo site_url();?>/promociones/"> <i class="fa fa-ticket"></i> Promociones</a>
                    </li> -->
                     <li>
                          <a href="<?php echo site_url();?>/promocion/"> <i class="fa fa-cog"></i> Promoción</a>
                    </li>

                 
                   

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <div id="page-wrapper "  style="padding-top: 0px ; padding-left: 0px ; padding-right: 0px ;">
            <div class="container-fluid">
               

<script type="text/javascript">
 $(document).ready(function(){
            site_url="<?php echo site_url(); ?>"
            mensaje="<?php echo $this->session->flashdata('msg') ?>";
           if(mensaje!=''){
            ExitoCustom(mensaje,2);
           }

        });
</script>

           