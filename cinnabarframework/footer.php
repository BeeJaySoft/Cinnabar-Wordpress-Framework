<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package cinnabar
 */
?>

<!-- Footer Area Start -->
	<div class="row footercolor">
		<br>
		<div class="container">
			<div class="row">
			


			<?php dynamic_sidebar('sidebar-2'); ?>

				<!-- <div class="centeritText">
					<span class="social">
						<a href="#"><i class="fa fa-3x fa-facebook-square tilt"></i></a> &nbsp;
						<a href="#"><i class="fa fa-3x fa-twitter-square  tilt"></i></a> &nbsp;
						<a href="#"><i class="fa fa-3x fa-linkedin-square tilt"></i></a> &nbsp;
						<a href="#"><i class="fa fa-3x fa-youtube-square tilt"></i></a>
					</span>
				</div>

				<div  class="centeritText servicecontent">
				<?php printf( __( 'Copyright © 2014 | Theme %1$s by %2$s', 'cinnabar' ), 'cinnabar', '<a href="http://pixeldropinc.com/" rel="designer">PixelDropINC</a>' ); ?>
					
				</div> -->

		
		</div>
		</div>
	</div>
	<!-- Footer Area End -->
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.slitslider.js"></script>
		<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			
			});
		</script>



	<!-- <footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'cinnabar' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'cinnabar' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'cinnabar' ), 'cinnabar', '<a href="http://pixeldropinc.com/" rel="designer">PixelDropINC</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
