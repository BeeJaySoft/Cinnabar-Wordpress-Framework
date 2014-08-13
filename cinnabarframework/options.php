<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'options_check'),
		'two' => __('Two', 'options_check'),
		'three' => __('Three', 'options_check'),
		'four' => __('Four', 'options_check'),
		'five' => __('Five', 'options_check')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_check'),
		'two' => __('Pancake', 'options_check'),
		'three' => __('Omelette', 'options_check'),
		'four' => __('Crepe', 'options_check'),
		'five' => __('Waffle', 'options_check')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __('Settings', 'options_check'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('index page contact', 'options_check'),
		'desc' => __('Contact goes here.', 'options_check'),
		'id' => 'contact_index_textarea',
		'std' => ' <address>
                 <strong>Cinnabar Framework</strong><br>
	                         Lorem, 701-704<br>
	                         30123<br>
	                         Lorem<br>
	                         Ipsum<br>
	       <abbr>P:</abbr> +39 041 340 4363
 </address>',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('Google Map iframe', 'options_check'),
		'desc' => __('Google Map iframe goes here.', 'options_check'),
		'id' => 'map_index_textarea',
		'std' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3424.0422875907198!2d75.833621!3d30.885478!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a824baf1ced47%3A0x4e60d6fa09d50f4f!2sPixeldropinc+Ludhiana!5e0!3m2!1sen!2s!4v1405319992435',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('Services', 'options_check'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Service one font awesome class', 'options_check'),
		'desc' => __('Enter Font Awesome Class For Service one. e.g. fa fa-html5', 'options_check'),
		'id' => 'service_one_text',
		'std' => 'fa fa-code',
		'type' => 'text');

	$options[] = array(
		'name' => __('Service one title', 'options_check'),
		'desc' => __('Enter title for Service one.', 'options_check'),
		'id' => 'service_one_title_text',
		'std' => 'Service',
		'type' => 'text');

	$options[] = array(
		'name' => __('Service one content', 'options_check'),
		'desc' => __('Enter content for service one.', 'options_check'),
		'id' => 'service_one_content_textarea',
		'std' => 'Sed justo eros, cursus nec ultrices at, tristique eget nisi. Fusce congue vestibulum lacinia. at, placerat at leo. Donec sodales or.',
		'type' => 'textarea');

	
	$options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('<hr>', 'options_check'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Service two font awesome class', 'options_check'),
		'desc' => __('Enter Font Awesome Class For Service two. e.g. fa fa-css3', 'options_check'),
		'id' => 'service_two_text',
		'std' => 'fa fa-code',
		'type' => 'text');

	$options[] = array(
		'name' => __('Service two title', 'options_check'),
		'desc' => __('Enter title for Service two.', 'options_check'),
		'id' => 'service_two_title_text',
		'std' => 'Service',
		'type' => 'text');

	$options[] = array(
		'name' => __('Service two content', 'options_check'),
		'desc' => __('Enter content for service two.', 'options_check'),
		'id' => 'service_two_content_textarea',
		'std' => 'Sed justo eros, cursus nec ultrices at, tristique eget nisi. Fusce congue vestibulum lacinia. at, placerat at leo. Donec sodales or.',
		'type' => 'textarea');

	
	$options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('<hr>', 'options_check'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Service three font awesome class', 'options_check'),
		'desc' => __('Enter Font Awesome Class For Service three. e.g. fa fa-cloud', 'options_check'),
		'id' => 'service_three_text',
		'std' => 'fa fa-code',
		'type' => 'text');

	$options[] = array(
		'name' => __('Service three title', 'options_check'),
		'desc' => __('Enter title for Service three.', 'options_check'),
		'id' => 'service_three_title_text',
		'std' => 'Service',
		'type' => 'text');

	$options[] = array(
		'name' => __('Service three content', 'options_check'),
		'desc' => __('Enter content for service three.', 'options_check'),
		'id' => 'service_three_content_textarea',
		'std' => 'Sed justo eros, cursus nec ultrices at, tristique eget nisi. Fusce congue vestibulum lacinia. at, placerat at leo. Donec sodales or.',
		'type' => 'textarea');

	
	$options[] = array(
		'name' => __('', 'options_check'),
		'desc' => __('<hr>', 'options_check'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Service four font awesome class', 'options_check'),
		'desc' => __('Enter Font Awesome Class For Service three. e.g. fa fa-code', 'options_check'),
		'id' => 'service_four_text',
		'std' => 'fa fa-code',
		'type' => 'text');

	$options[] = array(
		'name' => __('Service four title', 'options_check'),
		'desc' => __('Enter title for Service four.', 'options_check'),
		'id' => 'service_four_title_text',
		'std' => 'Service',
		'type' => 'text');

	$options[] = array(
		'name' => __('Service four content', 'options_check'),
		'desc' => __('Enter content for service four.', 'options_check'),
		'id' => 'service_four_content_textarea',
		'std' => 'Sed justo eros, cursus nec ultrices at, tristique eget nisi. Fusce congue vestibulum lacinia. at, placerat at leo. Donec sodales or.',
		'type' => 'textarea');
	

	$options[] = array(
		'name' => __('Text Editor', 'options_check'),
		'type' => 'heading' );

	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
	);

	$options[] = array(
		'name' => __('Default Text Editor', 'options_check'),
		'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'options_check' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'example_editor',
		'type' => 'editor',
		'settings' => $wp_editor_settings );

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'media_buttons' => true
	);

	$options[] = array(
		'name' => __('Additional Text Editor', 'options_check'),
		'desc' => sprintf( __( 'This editor includes media button.', 'options_check' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'example_editor_media',
		'type' => 'editor',
		'settings' => $wp_editor_settings );

	return $options;
}