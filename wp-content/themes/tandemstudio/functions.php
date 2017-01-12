<?php
/*
Author: Eddie Machado
URL: http://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, etc.
*/

// CUSTOMIZE THE WORDPRESS ADMIN (off by default)
require_once( 'includes/custom-admin.php' );

require_once( 'includes/cleanup.php' );
require_once( 'includes/enquene-scripts.php' );
require_once( 'includes/image-sizes.php' );
require_once( 'includes/menus.php' );
require_once( 'includes/sidebars.php' );



// LOAD BONES CORE (if you remove this, the theme will break)
require_once( 'includes/init-theme.php' );



require_once( 'includes/post-types.php' );

tandem_init_theme();


require_once( 'parts/page-pagination/page-pagination.php' );
require_once( 'parts/related-posts/related-posts.php' );
