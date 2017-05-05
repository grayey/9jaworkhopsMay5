<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if ($page == 'home') { echo "Welcome to 9jaworkshops Register as an artisans";} ?>
        <?php if ($page == 'about') { echo "About - 9jaworkshops";} ?>
        <?php if ($page == 'members') { echo "100% free Registration - 9jaworkshops";} ?>
    </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/template-style.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-select.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style-lib.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate-min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/9jaworks.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mobile.css'); ?>">

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <script src="<?php echo base_url('assets/js/jquery lib v2.2.5.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/9jawork.js'); ?>" type="text/javascript"></script>       
</head>
    <header class="" id="header">
        <div class="top-navcon">
            <div class="top-nav container">
                <div class="contact">
                    <i class="fa fa-phone"></i>
                    <a href="Tel:0706051748">Tel: 07060511748</a>
                </div>
                 <div class="Email-con">
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:9jaworkshops@9jaworks.ng">Email: 9jaworkshops@9jaworks.ng</a>
                </div>
            </div>
        </div>
        <nav class="navbar ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar w3-red"></span>
                        <span class="icon-bar w3-red"></span>
                        <span class="icon-bar w3-red"></span>
                    </button> 
                    <a class="navbar-brand" id="brand" href="index.html">
                        <div class="row">
                            <div class="col-sm-8">
                                <img src="<?php echo base_url('assets/img/9ja works.png');?>" class="" alt="9jaworkshop logo">
                            </div>
                            <div class="col-sm-4"></div>        
                        </div>
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="<?php if ($page == 'home') {echo "active";}  ?>"><a href="<?php echo base_url('Home');?>">Home</a></li>
                        <li class="<?php if ($page == 'members') {echo "active";}  ?>"><a href="<?php echo base_url('Home/members');?>">Members</a></li>
                        <li class="<?php if ($page == 'about') {echo "active";}  ?>"><a href="<?php echo base_url('Home/about');?>">About Us</a></li>
                        <li ><a href="">Contact Us</a></li>
                        <li class="<?php if ($page == 'available_artisans') {echo "active";}  ?>"><a href="<?php echo base_url('Home/available_artisans');?>">Available Artisans</a></li>
                    </ul>
                </div>
            </div>    
        </nav> 
    </header>
