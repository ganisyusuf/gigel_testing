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
    <title>EDIT PROFILE</title>
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

    <section id="contact" class="s-contact"> <!-- Section Login_Register -->

        <div class="overlay"></div>
        <div class="contact__line"></div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Update profile now</h3>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">
            
            <div class="contact-primary">
                <?php 
                    foreach ($user_profiles->result() as $i) {
                ?>

                <h3 class="h6">HELLO <?php echo $i->nama; ?></h3>

                <form name="contactForm" method="post" action="<?php echo site_url('Creart_profiles/update_profile');?>">
                    <fieldset>
    
                    <div class="form-field">
                        Full Name :<input name="nama" type="text" id="contactName" placeholder="Your Name" value="<?php echo $i->nama;?>" required="" aria-required="true" class="full-width">
                    </div>

                     <div class="form-field">
                        Address :<input name="alamat" type="text" id="contactSubject" placeholder="Address" value="<?php echo $i->alamat;?>" class="full-width">
                    </div>

                    <div class="form-field">
                       Confirm Password : <input name="password" type="password" id="contactSubject" placeholder="Masukkan password untuk konfirmasi" value="" class="full-width" required>
                    </div>

                    <br>
                    
                    <div class="form-field">
                        <input type="submit" class="full-width btn--primary" value="update"></input>
                    </div>

                    <?php } ?>
                    </fieldset>
                </form>

            </div> <!-- end contact-primary -->

             <div class="contact-secondary">
                <div class="contact-info">

                    <h3 class="h6 hide-on-fullwidth">Contact Info</h3>

                    <div class="cinfo">
                        <h5>Where to Find Us</h5>
                        <p>
                            Jl Ganesha 32A<br>
                            Bandung, West Java<br>
                            40132 ID
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Email Us At</h5>
                        <p>
                            creart@gmail.com<br>
                            ganismaulia@creart.com
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Call Us At</h5>
                        <p>
                            Phone: (+62) 896 - 7003 - 3905<br>
                            Mobile: (+62) 897 - 6256 - 622<br>
                        </p>
                    </div>

                    <ul class="contact-social">
                        <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        </li>
                    </ul> <!-- end contact-social -->

                </div> <!-- end contact-info -->
            </div> <!-- end contact-secondary -->
        </div> <!-- end contact-content -->
    </section> <!-- end s-contact -->

    <footer>

        <div class="row footer-main">

            <div class="col-six tab-full left footer-desc">

                <div class="footer-logo"></div>
                Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Quaerat voluptas autem necessitatibus vitae aut.

            </div>

            <div class="col-six tab-full right footer-subscribe">

                <h4>Get Notified</h4>
                <p>Quia quo qui sed odit. Quaerat voluptas autem necessitatibus vitae aut non alias sed quia. Ut itaque enim optio ut excepturi deserunt iusto porro.</p>

                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">
                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                        <input type="submit" name="subscribe" value="Subscribe">
                        <label for="mc-email" class="subscribe-message"></label>
                    </form>
                </div>

            </div>

        </div> <!-- end footer-main -->

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Glint 2017</span> 
                    <span>Site Template by <a href="https://www.colorlib.com/">Colorlib</a></span>  
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->

    <script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins.js');?>"></script>
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>

    </body>
</html>