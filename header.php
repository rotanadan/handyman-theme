<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thehandymancan
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='https://fonts.googleapis.com/css?family=Nunito:400,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-65060602-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-65060602-1');
</script>

</head>

<body <?php body_class(); ?>>
	<style>
		<?php include("crit.min.css"); ?>
	</style>
<div class="site-overlay"></div>
<nav class="pushy visible-tab pushy-right">
	<div>
		<?php
		$curpage= get_the_ID();
		$urlext='';
		if($curpage == 169){
			$urlext='-dex';
			wp_nav_menu( array( 'menu' => 'Main Dex' ) );
		}else if($curpage == 182){
			$urlext='-angies';
			wp_nav_menu( array( 'menu' => 'Main Angies' ) );
		}else{
			wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) );
		}

		?>
	</div>
</nav>


<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">

		<div class="top-wrapper">
			
				
			<div class="logoholder top-left hidden-xs">
				.
				<img class="logo" src="/images/logobig-s.png"/>

			</div>
				
			<div class="top-middle">
				<div class="site-branding">

					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?> Inc<sup>&reg;</sup></a></h1>

						<a class="visible-xs menu-btn" href="#">
							<i class="fa fa-bars"></i>
						</a>


				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">

					<span class="hidden-xs text-center">
						<?php
							if($curpage == 169){
								wp_nav_menu( array( 'menu' => 'Main Dex' ) );
						 }else if($curpage == 182){
							wp_nav_menu( array( 'menu' => 'Main Angies' ) );
						}else{
								wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) );
							}

						?>
					</span>

				</nav><!-- #site-navigation -->
			</div>

			<div class="top-logos text-right">
				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php
				endif; ?>
				<a href="http://www.bbb.org/minnesota/business-reviews/handyman-services/the-handyman-can-in-oakdale-mn-21002466#sthash.xTmyVKOi.xptt" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/images/bbb-logo.png" width="120" height="37">
				</a>
				<a href="https://www.angieslist.com/companylist/us/mn/oakdale/the-handyman-can%21%21%21%C2%AE-inc-reviews-92065.htm?cid=ssabadge" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/images/asv-angies-list1.png" width="120" height="57">
				</a>
				
				<a href="https://www.yelp.com/biz/the-handyman-can-saint-paul?osq=the+handy+man+can" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/old_stroke.png"></a>

			</div>

			<div class="clearfix"></div>

		</div>


	</header><!-- #masthead -->
	<?php $curpage= get_the_ID();
	  if(is_front_page() || $curpage == 169 || $curpage == 182){ ?>
<div class="hero-section text-center">
	<div class="wrapper">
<div class="hero-text">
				<h2>Basement to roof and beyond.<br> Large or small we do it all!</h2>

				<h3>Serving the Twin Cities MN and Spooner WI areas.</h3>

				<div class="boogiebox cta-boxes">
					<div class="sm-box">
						<div class="cta-box">
							<i class="fa fa-phone"></i> Call us now!<br>
							651-487-5606
						</div>

					</div>
					<div class="sm-box fillbox">
							<div class="cta-box filler">
								<a class="btn" href="/contact-us<?php echo $urlext; ?>">Contact us online!</a>
							</div>


					</div>
				</div>
		</div>
	</div>
</div>
	<?php } ?>
	<div id="content" class="site-content">
