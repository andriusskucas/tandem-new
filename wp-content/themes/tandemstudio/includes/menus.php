<?php

function tandem_register_menus(){
    // wp menus
	add_theme_support( 'menus' );

	// registering wp3+ menus
	register_nav_menus(
		array(
			'main-nav' => __( 'Pagrindinis meniu', 'tandem' ),   // main nav in header
			'footer-links' => __( 'footerio meniu', 'tandem' ) // secondary nav in footer
		)
	);
}
