<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>PROFILE</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/base.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">

    <!-- script
    ================================================== -->
    <script src="<?php echo base_url('assets/js/modernizr.js');?>"></script>
    <script src="<?php echo base_url('assets/js/pace.min.js');?>"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/favicon.ico')?>;" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url('assets/favicon.ico');?>" type="image/x-icon">

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="<?php echo base_url('index.php/Creart_profiles');?>">
                <img src="<?php echo base_url('assets/images/logo.png');?>" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3> 
                
                <ul class="header-nav__list">
                    <li><?php echo $this->session->userdata('email'); ?></li>
                    <li><a href="<?php echo base_url('index.php/Creart_profiles/keluar');?>">Logout</a></li>
                </ul>
    
                <p>CreArt is not about art. But how art can commucation with all, create a meaningfull art, and create a beutifull art.</p>
    
                <ul class="header-nav__social">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="<?php echo base_url('assets/images/hero-bg.jpg');?>" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Welcome to CreArt</h3>
                <?php 
                foreach($user_profiles->result() as $i){  ?>
                 <h1>
                    HELLO <?php echo $i->nama ?>
                </h1> <br />
                <table border="0">
                    <thead>
                        <tr>
                            <td>Full Name : <?php echo $i->nama; ?></td>
                            
                        </tr>
                        <tr>
                            <td>Email        : <?php echo $i->email; ?></td>
                            
                        </tr>
                        <tr>
                            <td>Mobile Phone        : <?php echo $i->no_hp; ?></td>
                        </tr>
                         <tr>
                            <td>Address       : <?php echo $i->alamat; ?></td>
                        </tr>
                    </thead>
                    
                </table>
                     <?php
                }
               ?>
                

                <div class="home-content__buttons">
                    <a href="<?php echo base_url('index.php/Creart_profiles/editprofil');?>" class="btn btn--stroke">
                        Edit Profile
                    </a>
                    <a href="<?php echo base_url('index.php/Creart_profiles/editpassword'); ?>" class="btn btn--stroke">
                        Edit Password
                    </a>
                </div>

            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Scroll Down</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div> <!-- end home-content -->


        <ul class="home-social">
            <li>
                <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-behance" aria-hidden="true"></i><span>Behance</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a>
            </li>
        </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->


    
    <!-- Java Script
    ================================================== -->
    <script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins.js');?>"></script>
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>

</body>

</html>