
<?php
if($this->session->userData("user_id")==""){
 echo "<script>window.location='".base_url()."User'</script>";
 die("-");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url(); ?>/assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>/assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

<!-- alertify css -->
<link href="<?php echo base_url('assets/alertify/css/alertify.css');?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('assets/alertify/css/alertify.min.css');?>" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo base_url('assets/alertify/css/themes/default.min.css');?>">
<!--datatable css-->
<link rel="stylesheet" href="<?php echo base_url('assets/DataTables/datatables.min.css')?>">



    <script src="<?php echo base_url(); ?>/assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>

    
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="<?php echo base_url(); ?>/assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="#" class="simple-text">
                  Customer Panel
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="#">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                     <li class="active">
                        <a href="<?php echo base_url('Customers/Benefit'); ?>">
                            <i class="material-icons">account_balance</i>
                            <p>Benefits</p>
                        </a>
                    </li>
                    
                    
                    
                   <!--  <li>
                        
                        <a data-toggle="collapse" href="#usersTab" class="" aria-expanded="false">
                            <i class="material-icons">supervisor_account</i>
                            
                            <p>Bookings
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="usersTab" aria-expanded="true" style="">
                            <ul class="nav">
                                <li>
                                <i class="material-icons" style="margin-left: 12%;font-size: 18px;">add</i>
                                    <a href="<?php echo base_url();?>">
                                       
                                        <span class="sidebar-normal">Local</span>
                                    </a>
                                </li>
                                <li>
                                <i class="material-icons" style="margin-left: 12%;font-size: 18px;">format_align_justify</i>
                                    <a href="<?php echo base_url();?>User/UserList">
                                        <span class="sidebar-normal">Outstation</span>
                                    </a>
                                </li>
                                <li>
                              
                                
                            </ul>
                        </div>
                    </li>
                    
                    <li>
                        
                        <a data-toggle="collapse" href="#clientTab" class="" aria-expanded="false">
                            <i class="material-icons">account_balance</i>
                            
                            <p>Cities
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="clientTab" aria-expanded="true" style="">
                            <ul class="nav">
                                <li>
                                <i class="material-icons" style="margin-left: 12%;font-size: 18px;">add</i>
                                    <a href="<?php echo base_url('City');?>">
                                       
                                        <span class="sidebar-normal">New City</span>
                                    </a>
                                </li>
                                <li>
                                <i class="material-icons" style="margin-left: 12%;font-size: 18px;">format_align_justify</i>
                                    <a href="<?php echo base_url();?>City/ListCity">
                                        <span class="sidebar-normal">City List</span>
                                    </a>
                                </li>
                                
                              
                            </ul>
                        </div>
                    </li>
                    <li>
                        
                        <a data-toggle="collapse" href="#settingTab" class="" aria-expanded="false">
                             <i class="material-icons">web</i>
                            
                            <p>Web Package
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="settingTab" aria-expanded="true" style="">
                            <ul class="nav">
                                <li>
                                <i class="material-icons" style="margin-left: 12%;font-size: 18px;">add</i>
                                    <a href="<?php echo base_url();?>Web/Package">
                                       
                                        <span class="sidebar-normal">New Package</span>
                                    </a>
                                </li>
                                <li>
                                
                                <i class="material-icons" style="margin-left: 12%;font-size: 18px;">format_align_justify</i>
                                    <a href="<?php echo base_url();?>Web/ListPackage">
                                        <span class="sidebar-normal">Package List</span>
                                    </a>
                                </li>
                                
                                
                               
                               
                                
                            </ul>
                        </div>
                    </li>


                    <li>
                        
                        <a data-toggle="collapse" href="#weos" class="" aria-expanded="false">
                             <i class="material-icons">web_assets</i>
                            
                            <p>Web Outstation
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="weos" aria-expanded="true" style="">
                            <ul class="nav">
                                <li>
                                <i class="material-icons" style="margin-left: 12%;font-size: 18px;">add</i>
                                    <a href="<?php echo base_url();?>Web/Outstation">
                                       
                                        <span class="sidebar-normal">New Package</span>
                                    </a>
                                </li>
                                <li>
                                
                                <i class="material-icons" style="margin-left: 12%;font-size: 18px;">format_align_justify</i>
                                    <a href="<?php echo base_url();?>Web/ListOS">
                                        <span class="sidebar-normal">Package List</span>
                                    </a>
                                </li>
                                
                                
                               
                               
                                
                            </ul>
                        </div>
                    </li>
                    
                    
                    <li>
                        
                        <a data-toggle="collapse" href="#paymentTab" class="" aria-expanded="false">
                            <i class="material-icons">directions_car</i>
                            
                            <p>Cabs
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="paymentTab" aria-expanded="true" style="">
                            <ul class="nav">
                                <li>
                                    <a href="<?php echo base_url('Cabs'); ?>">
                                       
                                        <span class="sidebar-normal">New Cabs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('Cabs/ListCabs'); ?>">
                                        <span class="sidebar-normal">Cab Lists</span>
                                    </a>
                                </li>
                                
                                
                            </ul>
                        </div>
                    </li> -->
                    
                     <li class="active-pro">
                        <a href="<?php echo base_url('User/Logout'); ?>" style="background-color: #FFF;">
                            <i class="material-icons">exit_to_app</i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                       
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                           
                            
                            <li>
                                <a href="<?php echo base_url('User/Logout'); ?>">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Logout</p>
                                </a>
                            </li>
                        </ul>
                       
                    </div>
                </div>
            </nav>