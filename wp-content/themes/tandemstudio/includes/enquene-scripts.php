<?php
// loading modernizr and jquery, and reply script
function tandem_scripts_and_styles() {

  global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

  if (!is_admin()) {

		// modernizr (without media query polyfill)
		wp_register_script( 'tandem-modernizr', get_stylesheet_directory_uri() . '/assets/vendor/modernizr/modernizr.custom.min.js', array(), '2.5.3', false );

		// register main stylesheet
		wp_register_style( 'tandem-stylesheet', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '', 'all' );

		// ie-only style sheet
		wp_register_style( 'bones-ie-only', get_stylesheet_directory_uri() . '/assets/css/ie.css', array(), '' );

        // comment reply script for threaded comments
        if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
              wp_enqueue_script( 'comment-reply' );
        }

		//adding scripts file in the footer
		wp_register_script( 'tandem-js', get_stylesheet_directory_uri() . '/assets/js/app.js', array( 'jquery' ), '', true );

		// enqueue styles and scripts
		wp_enqueue_script( 'tandem-modernizr' );
		wp_enqueue_style( 'tandem-stylesheet' );
		wp_enqueue_style( 'tandem-ie-only' );

		$wp_styles->add_data( 'tandem-ie-only', 'conditional', 'lt IE 9' ); // add conditional wrapper around ie stylesheet

		/*
		I recommend using a plugin to call jQuery
		using the google cdn. That way it stays cached
		and your site will load faster.
		*/
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'tandem-js' );

	}
}
