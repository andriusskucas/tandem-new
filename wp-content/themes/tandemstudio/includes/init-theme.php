<?php
function tandem_init_theme(){
    // wp thumbnails (sizes handled in functions.php)
	add_theme_support( 'post-thumbnails' );

    // rss thingy
	add_theme_support('automatic-feed-links');

    tandem_set_languages();

    // launching operation cleanup
  add_action( 'init', 'tandem_head_cleanup' );
  // A better title
  add_filter( 'wp_title', 'rw_title', 10, 3 );
  // remove WP version from RSS
  add_filter( 'the_generator', 'tandem_rss_version' );

  // clean up gallery output in wp
  add_filter( 'gallery_style', 'tandem_gallery_style' );

  // enqueue base scripts and styles
  add_action( 'wp_enqueue_scripts', 'tandem_scripts_and_styles', 999 );
  // ie conditional wrapper

  // adding sidebars to Wordpress (these are created in functions.php)
  add_action( 'widgets_init', 'tandem_register_sidebars' );

  // cleaning up random code around images
  add_filter( 'the_content', 'tandem_filter_ptags_on_images' );
  // cleaning up excerpt
  add_filter( 'excerpt_more', 'tandem_excerpt_more' );

    tandem_register_menus();

    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page('Temos nustatymai');

    }


    if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_58776a4b96810',
	'title' => 'Hero paveikslas',
	'fields' => array (
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_58776a6447ebd',
			'label' => 'Antraštė',
			'name' => 'top-image-text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'message' => '',
			'esc_html' => 0,
			'new_lines' => 'wpautop',
			'key' => 'field_58776ac671439',
			'label' => 'Fono paveikslėlis',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'key' => 'field_58776b017143a',
			'label' => 'Fono paveikslėlis dideliems ekranams',
			'name' => 'top-image-big',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'key' => 'field_58776b217143b',
			'label' => 'Fono paveikslėlis mažiems ekranams',
			'name' => 'top-image-small',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/home.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_58777974c32b6',
	'title' => 'Pagrindinio puslapio citata',
	'fields' => array (
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_58777980bc74f',
			'label' => 'Citatos tekstas',
			'name' => 'main_quote_text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/home.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
}

function tandem_set_languages(){
    // let's get language support going, if you need it
    load_theme_textdomain( 'tandem', get_template_directory() . '/assets/translation' );
}
