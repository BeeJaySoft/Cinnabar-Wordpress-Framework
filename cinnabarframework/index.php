<?php
/**
 * Template name: Blog Template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package cinnabar
 */

get_header(); ?>



<!-- 
				<ol class="breadcrumb" style="margin: 0">
  <li><a href="#">Home /</a></li>
 
</ol> -->
<!--img-->
	
					<div class="row">
						<div class="container">
							<div class="col-lg-9">
								<?php if ( have_posts() ) : ?>

										<?php /* Start the Loop */ ?>
										<?php while ( have_posts() ) : the_post(); ?>

											<?php
												/* Include the Post-Format-specific template for the content.
												 * If you want to override this in a child theme, then include a file
												 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
												 */
												get_template_part( 'content', get_post_format() );
											?>
											<hr>

										<?php endwhile; ?>

										<?php cinnabar_paging_nav(); ?>

									<?php else : ?>

										<?php get_template_part( 'content', 'none' ); ?>

									<?php endif; ?>

				<!-- <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat consequuntur veniam laudantium, necessitatibus quae ipsam odit ad obcaecati fuga fugiat cupiditate reprehenderit inventore aperiam, deleniti aut quam officia ratione laborum illum! Eum ipsam architecto, minus sapiente. Debitis, quod, nisi? Asperiores fugit dolores et accusamus ipsa officiis ex perspiciatis, quaerat ea!. […]

				</p> -->
			
							

							</div>
							<div class="col-lg-3">
									<?php get_sidebar(); ?>
							</div>
						</div>
					</div>
			


<?php get_footer(); ?>
