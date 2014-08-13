<?php
/**
 * The template for displaying all single posts.
 *
 * @package cinnabar
 */

get_header(); ?>

	<div class="row">
		<div class="container">
			<div class="col-lg-9">
				<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php cinnabar_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
			</div>
			<div class="col-lg-3">				
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>