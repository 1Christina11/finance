<!DOCTYPE html>
<html lang="en"><head>
   <!--
    Basic Page Needs
    ==================================================
    -->
   <meta charset="utf-8">
   <title><?php echo $title?></title>
   <!--
    Mobile Specific Metas
    ==================================================
    -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <!--
    CSS
    ==================================================
    -->
	
   <!-- Bootstrap-->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
   <!-- Animation-->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
   <!-- Morris CSS -->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/morris.css">
   <!-- FontAwesome-->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
   <!-- Icon font-->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/icon-font.css">
   <!-- Owl Carousel-->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.min.css">
   <!-- Owl Theme -->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.theme.default.min.css">
   <!-- Colorbox-->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/colorbox.css">
   <!-- Template styles-->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
   <!-- Responsive styles-->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive.css">

   <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file.-->
   <!--if lt IE 9
    script(src='js/html5shiv.js')
    script(src='js/respond.min.js')
    -->
	<!-- Favicon -->
    <link rel="icon" href="<?php echo base_url()?>assets/images/favicon_1.ico" type="image/x-icon">
</head>

<body>

   <div class="body-inner">

      <div class="site-top">
         <div class="topbar-transparent border-down" id="top-bar">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-md-9 col-sm-12">
<!--
                     <ul class="top-menu" id="top-bar-menu">
                        <li><a href="#">Why Us</a></li>
                        <li><a href="#">Locations</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Solution Center</a></li>
                     </ul>
-->
                     <!-- Ul end-->
                  </div>
                  <!-- Top info end-->
                  <div class="col-md-3 col-sm-12 text-lg-right text-md-center">
                     <ul class="top-social">
                        <li>
                           <a title="Facebook" href="<?php echo $contact_us->facebook_link?>">
                              <span class="social-icon"><i class="fa fa-facebook"></i></span>
                           </a>
                           <a title="Twitter" href="<?php echo $contact_us->twitter_link?>">
                              <span class="social-icon"><i class="fa fa-twitter"></i></span>
                           </a>
                           <a title="Linkdin" href="<?php echo $contact_us->linkedin_link?>">
                              <span class="social-icon"><i class="fa fa-linkedin"></i></span>
                           </a>
                           <a title="instgram" href="<?php echo $contact_us->instgram_link?>">
                              <span class="social-icon"><i class="fa fa-instagram"></i></span>
                           </a>
                           <a title="pinterest" href="<?php echo $contact_us->pinterest_link?>">
                              <span class="social-icon"><i class="fa fa-pinterest"></i></span>
                           </a>
                        </li>
                        <!-- List End -->
                     </ul>
                  </div>
                  <!-- Top social end-->
               </div>
               <!-- Content row end-->
            </div>
            <!-- Container end-->
         </div>
         <!-- Topbar end-->

         <header class="header nav-down nav-boxed-transparent" id="header-2">
            <div class="container">
               <div class="row">
                  <div class="logo-area clearfix logo-wrapper">
                     <div class="logo col-lg-3 col-md-12">
<!--
                        <a href="https://gcsfinancialcorp.com/">
                           <img width="120px" height="120px" src="<?php echo base_url()?>assets/images/GCS Logo-01.png" alt="logo">
                        </a>
-->
                     </div>
                     <!-- logo end-->
                     <div class="col-lg-9 col-md-12 pull-right">
                        <ul class="top-info unstyled top-info-wrraper">
                           <li><span class="info-icon"><i class="icon icon-phone3"></i></span>
                              <div class="info-wrapper">
                                 <p class="info-title"><a href="tel:<?php echo $contact_us->phone1?>"><?php echo $contact_us->phone1?></a></p>
                                 <p class="info-subtitle">Call us now</p>
                              </div>
                           </li>
                           <li><span class="info-icon"><i class="icon icon-phone3"></i></span>
                              <div class="info-wrapper">
                                 <p class="info-title"><a href="tel:<?php echo $contact_us->phone2?>"><?php echo $contact_us->phone2?></a></p>
                                 <p class="info-subtitle">Call us now</p>
                              </div>
                           </li>
                           <li><span class="info-icon"><i class="icon icon-envelope"></i></span>
                              <div class="info-wrapper">
                                 <p class="info-title"><a href="mailto:<?php echo $contact_us->e_mail?>" class="__cf_email__"><?php echo $contact_us->e_mail?></a></p>
                                 <p class="info-subtitle">Drop us line</p>
                              </div>
                           </li>
<!--
                           <li class="last"><span class="info-icon"><i class="icon icon-map-marker2"></i></span>
                              <div class="info-wrapper">
                                 <p class="info-title">1010 Avenue, NY, USA</p>
                                 <p class="info-subtitle">Visit Our Office</p>
                              </div>
                           </li>
-->
                           <li class="header-get-a-quote"><a class="btn btn-primary" href="<?php echo site_url('Apply_online')?>">Apply Now</a></li>
                        </ul>
                     </div>
                     <!-- Col End-->
                  </div>
                  <!-- Logo Area End-->
               </div>
            </div>
			<?php $this->load->view('menu')?>
         </header>
         <!-- Header end-->
      </div>
