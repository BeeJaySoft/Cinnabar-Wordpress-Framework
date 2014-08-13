<?php
/**
 * @package cinnabar
 */
?>
<div class="col-lg-12 MyriadPro-Blog" >
	<div class="col-lg-2">
		<center>
		<!-- <img id="post-img" class="img-circle" data-src="holder.js/100x100" alt="Generic placeholder image"> -->
		
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<img id="post-img" class="img-circle" src="<?php echo $image[0]; ?>" alt="Generic placeholder image">

<!-- <img class="img-circle" src="<?php echo $image[0]; ?>" alt=""> -->

<?php else : ?>
	<img id="post-img" class="img-circle" data-src="holder.js/72x72" alt="Generic placeholder image">
<?php endif; ?>

		</center>
	<center style="margin-top: 10px;"><h3 id="align"><?php cinnabar_posted_on(); ?></h3> </center>
	</div>
	<div class="col-lg-10">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" style="margin-top: 10px;">
		<?php the_title( sprintf( '<h1 style="font-size:24px" class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			Posted On <?php cinnabar_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'cinnabar' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'cinnabar' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'cinnabar' ) );
				if ( $categories_list && cinnabar_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'cinnabar' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'cinnabar' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'cinnabar' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'cinnabar' ), __( '1 Comment', 'cinnabar' ), __( '% Comments', 'cinnabar' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'cinnabar' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->	<hr>
</article><!-- #post-## --> 
	</div>

</div>




	