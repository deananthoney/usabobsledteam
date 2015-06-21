<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('&raquo;', true, 'right' );?></title>
	
	<!--<link rel="Shortcut Icon"  href="../wp-content/themes/ninezeroseven/assets/img/theme/logos/USBSFlogo.png"/>-->

  <link href="../wp-content/themes/ninezeroseven/images/images/USBSFlogo.png" type="image/x-icon" rel="shortcut icon">
	
<!--vertical JS Slider for Chatter Page-->
	<link href="../wp-content/themes/ninezeroseven/verticalsliderjs/jquery.mCustomScrollbar.css" rel="stylesheet" />


     <script src="../wp-content/themes/ninezeroseven/verticalsliderjs/jquery.mCustomScrollbar.js"></script>

     <script src="../wp-content/themes/ninezeroseven/verticalsliderjs/jquery.mCustomScrollbar.concat.min.js"></script>

	<!--End -->

	<!--Shinetime Slider for MEET The Sliders -->

	    <!-- JQuery Countdown Timer CSS stylesheet file -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" />
        <link rel="stylesheet" href="../wp-content/themes/ninezeroseven/countdown/assets/css/styles.css" />
        <link rel="stylesheet" href="../wp-content/themes/ninezeroseven/countdown/assets/countdown/jquery.countdown.css" />
        
      

	  <link rel="stylesheet" type="text/css" href="../wp-content/themes/ninezeroseven/shinetime.1.01/styles.css"></link>

	  <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
	  <script type="text/javascript" src="../wp-content/themes/ninezeroseven/shinetime.1.01/js/cufon-yui.js"></script>
	  <script type="text/javascript" src="fonts/aura_400.font.js"></script>

<!---END -->


	<!-- Mobile Specific Metas
  ================================================== -->

  	<?php global $data; ?>

	<?php if(isset($data['nzs_responsive_layout']) && 0 == $data['nzs_responsive_layout']): ?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<?php endif; ?>

		<!-- CSS
  ================================================== -->


	<?php

	 	if(!empty($data['nzs_custom_favicon'])):
	 	
	 		echo '<link rel="icon" href="'.$data['nzs_custom_favicon'].'">';

	 	endif;
  	?>


  	
  	<!--[if lt IE 10]>
		<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('stylesheet_directory'); ?>/assets/css/includedstyles.css" media="all"/>
	<![endif]-->



	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>


	<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->

</head>

<body <?php body_class(); ?>>
<!-- Primary Page Layout
	================================================== -->

<div id="up"></div>

<!-- TOP BAR -->

<section class="topBar <?php echo nzs_menu_class();?>" id="top">


		<?php 

			if(isset($data['nzs_plain_text_logo']) && 0 == $data['nzs_plain_text_logo']){
				/**$use_logo = "class=\"hide-text\"";please uncomment if error**/
			}
		 ?>
       <!--oldlogopart
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<h1<?php echo (isset($use_logo)) ? $use_logo : ''?>><?php echo bloginfo('name');?></h1>
		</a>-->


<!-- Header -->
	
<div id="white">

<div class="usalogo">


<a href="http://localhost/USAbobsledteam/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/theme/logos/usabobsledlogo1.png" height="113px" width="639px" border="0" alt="USABobsled Logo" /></a>


</div>


<!-- Social Essentials-->
 <?php echo do_shortcode('[social_essentials]');?> 
 

 <!-- Countdown -->
<?php echo do_shortcode('[ujicountdown id="USAbobslednew" expire="2014/02/22 20:40" ]'); ?>


<!--End-->

<div class="sochi">
<img src="<?php bloginfo('template_directory'); ?>/assets/img/theme/logos/sochilogo.png" height="80px" width="158px" border="0" alt="Sochi Logo" /> 





</div> 

</div>
</div>


<div class="topBar2">
<!--End of Header -->
<div id="container2">

		<nav class="mainMenu">
			<?php wp_nav_menu( array( 'container' => '','menu_id'=> 'main-menu', 'theme_location' => 'primary','fallback_cb'=> '') );?>
		</nav>

</div>

		<!-- DROP DOWN MENU -->

		<?php echo  ninezeroseven_wp_drop_menu();?>

		<!-- DROP DOWN ENDS -->


	</div> <!-- ./container -->
</section> <!-- ./topBar -->

<!-- ENDS TOP BAR -->

<?php
echo nzs_show_header();
?>

