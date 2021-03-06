<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <title><?php wp_title(''); ?></title>
  <!--Favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/prod/images/favicons/favicon-16x16.png">
  
  <?php wp_head(); ?>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <style>
      .center {
        top:20%;
        left:20%;
      }
      @media screen and (min-width: 768px) {
        .hero-txt-wrap {
            height: auto;
            width: auto;
        }
      }
    </style>
  <![endif]-->
  
<?php if ( is_user_logged_in() ) { ?>
	<style>
    .nav-wrap.sticky {
      margin-top:32px;
    }
    
  </style>
<?php } ?>
</head>

<body>
 
 <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W4RW4N"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W4RW4N');</script>
<!-- End Google Tag Manager -->
 
  <div class="head-wrap">  
    <header class="container">
      <div class="row">
        <div class="col-sm-12 head">
          <div class="header-cta"><h3 class="phone">763-420-4073</h3>
          <a href="#popup" class="button medium _orange open-popup-link">Free Quote</a>
        </div>
          <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">Concrete Science</a>
        </div>
      </div>
    </header>
  </div>
  <div class="nav-wrap">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <nav>
            <?php
              $defaults = array( 
                'theme_location' => 'main_menu',
                'container' => '',
                'menu_class' => 'main-menu',
                'menu_id' => '',
            );
            wp_nav_menu( $defaults );      
            ?>
            <div class="nav-cta">
              <a class="button medium _orange open-popup-link" href="#popup">Free Quote</a>
              <span class="phone-bar">763-420-4073</span>
            </div>
            <div class="nav-icon">
              <div></div>
            </div>  
            
          </nav>
        </div>
      </div> 
         
    </div>
  </div>
  
<div id="popup" class="white-popup mfp-hide">
  <h3>Connect with one of our experts</h3>
  <?php echo do_shortcode('[ninja_forms id=5]') ?>
</div>