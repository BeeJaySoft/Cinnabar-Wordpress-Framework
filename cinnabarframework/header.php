<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cinnabar
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div class="container">
		<!-- Header Area Start -->
		
		<div class="row">
			<!-- Blog Name Area Start -->
			<div class="col-lg-2">
			
			<span style="font-size:36px;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></span>
				<span style="font-size:36px;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><!-- CINN<span class="cinnabar">A</span>B<span class="cinnabar">A</span>R --></a></span>
			</div>
			<!-- Blog Name Area End -->
			
			<!-- Navigation Area Start -->
			<div class="col-lg-9 col-lg-push-1 margin-top-10" style="float:right">

			<nav class="cl-effect-1" style="font-size: 16px;">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'cinnabar' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav>
			</div>
			<!-- Navigation Area End -->
		</div>
		<!-- Header Area End -->
		</div>
		<br>

		
	</header><!-- #masthead -->

	
