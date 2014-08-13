<?php
/**
 * Template Name: Custom Home Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package cinnabar
 */

get_header(); ?>
	<div class="row">
			<div class="container">
				<!-- Slider Shortcode Start -->
					<?php echo do_shortcode('[Custom Slider Shortcode Goes Here, see custom-home-template.php]'); ?>	
					<img id="post-img"  data-src="holder.js/1170x270" alt="Generic placeholder image">
				<!-- Slider Shortcode End -->
			</div>		
	</div>
	<br>



		<div class="container">

				<!-- include template_part servive_template_part.php start -->
				<?php get_template_part('/template_parts/services_template_part', 'page' ); ?>	
				<!-- include template_part servive_template_part.php start end -->


		<hr/>

		</div>		

	<br>

		<!-- Theme Options Settings page start-->
		<div class="container">
			<div class="col-lg-4">
			<br>					
	           <?php echo of_get_option('contact_index_textarea', 'no entry'); ?>

			</div>
			<div class="col-lg-8">
				<iframe src="<?php echo of_get_option('map_index_textarea', 'no entry'); ?>	" width="800" height="400" frameborder="0" style="border:0"></iframe>						
			</div>
		</div>	
		<!-- Theme Options Settings page end -->

	<br><br>



	


<?php //get_sidebar(); ?>
<?php get_footer(); ?>
