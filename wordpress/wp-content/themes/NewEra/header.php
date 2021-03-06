<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php wp_title(''); ?></title>
	<meta name="viewport" content="width=device-width">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 8]>
	    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
<?php if(is_front_page() ) { ?>
     <div class="parallax" id="toolbelt" gumby-parallax="3">
       <h2 class="screen-reader-text"> New Era Home Improvemnet - Jackson Michigan</h2>
       <img src="<?php echo get_template_directory_uri().'/assets/images/logo-large.png'; ?>" alt="New Era Home Improvemnet - Jackson Michigan" />
     </div>
    <?php } ?>
        <header class="navbar" gumby-fixed="top" id="nav">
        <div class="row">
            <!-- Toggle for mobile navigation, targeting the <ul> -->
            <a class="toggle" gumby-trigger="#nav >div > ul" href="#"><i class="icon-menu"></i></a>
            <h1 class="four columns logo">
                <a id="logo" href="<?php echo home_url( '/' ); ?>"><span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-white.png" gumby-retina />
                </a>
            </h1>

                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'eight columns centered','walker' => new Walker_Page_Custom, 'container' => '', 'container_class' => '' ) ); ?>
       </div>
       </header>
    <div class="row">
