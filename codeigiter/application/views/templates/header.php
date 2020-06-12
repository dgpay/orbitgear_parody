<!DOCTYPE html>
<html>
<head>
        <link rel="icon" type="assets/img/image/png" href="<?php echo base_url("assets/img/image/favicon_32x32.png"); ?>">
        <title><?= $title ?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--bootsrap css-->
      <link href="<?php echo base_url("assets/bootsrap/css/bootstrap.min.css"); ?>" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--CSSLINK-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/firstload.css"); ?>">
      <!--nav-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    
</head>
<body>
    <!--*************************************************************************************************************
    *      HEADER
    ******************************************************************************************************************-->
    
    <nav class="navbar navbar-expand-sm  fixed-top">
            <a class="navbar-brand" href="#" >
                    <img src="<?php echo base_url("assets/img/logo/Logo_White_280x@2x.png"); ?>"  class="primaryLogo" width="110px">
            </a>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item underline">
                <a class="nav-link" href="<?php echo base_url("halaman/error"); ?>">DOMINATExORBITGear V.01</a>
              </li>
              <li class="nav-item underline">
                <a class="nav-link" href="#">NEW ARRIVAL</a>
              </li>
              <li class="nav-item dropdown underline">
                    <a  class=" nav-link dropdown-toggle" data-toggle="dropdown">
                      SHOP
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Link 1</a>
                      <a class="dropdown-item" href="#">Link 2</a>
                      <a class="dropdown-item" href="#">Link 3</a>
                    </div> 
                </li>
              <li class="nav-item underline">
                    <a class="nav-link" href="<?php echo base_url("halaman/ourstory"); ?>">OUR STORY</a>
             </li>
             
             <li class="nav-item dropdown underline">
              <a  class=" nav-link dropdown-toggle" data-toggle="dropdown">
                ARCHIEVE
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Link 1</a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
              </div> 
          </li>
             
                    <li class="nav-item icon"><a class="nav-link " href="https://twitter.com/orbitgear" title="ORBIT Gear Indonesia on Twitter" rel="me" target="_blank"><span class="fa fa-twitter"></span></a></li>
                    <li class="nav-item icon"><a class="nav-link " href="https://www.facebook.com/orbitgear" title="ORBIT Gear Indonesia on Facebook" rel="me" target="_blank"><span class="fa fa-facebook"></span></a></li>
                    <li class="nav-item icon"><a class="nav-link " href="https://id.pinterest.com/orbitgear/" title="ORBIT Gear Indonesia on Pinterest" rel="me" target="_blank"><span class="fa fa-pinterest-p"></span></a></li>
                    <li class="nav-item icon"><a class="nav-link " href="https://instagram.com/orbitgear" title="ORBIT Gear Indonesia on Instagram" rel="me" target="_blank"><span class="fa fa-instagram"></span></a></li>
                    <li class="nav-item icon"><a class="nav-link " href="mailto:info@orbitgear.net" title="Email ORBIT Gear Indonesia" rel="me" target="_blank"><span class="fa fa-envelope-o"></span></a></li>
                    <li class="nav-item icon"><a class="nav-link " href="#" title="Email ORBIT Gear Indonesia" rel="me" target="_blank"><span class="fa fa-search"></span></a></li>
                    <li class="nav-item icon"><a class="nav-link " href="<?php echo base_url("halaman/login"); ?>" title="Email ORBIT Gear Indonesia" rel="me" target="_blank"><span class="fa fa-user"></span></a></li>
                    
                    <li class="dropdown">
                      <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                        IDR
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">IDR</a>
                        
                      </div>
                      <br>
                      <button type="button" class="btn btn-secondary bawah" data-toggle="dropdown">
                       <a class="fa fa-shopping-cart"> Cart</a>
                      </button>
                    </li>
             </ul>
            
             
             </ul>
          </nav>    
   