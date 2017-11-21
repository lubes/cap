<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// Get Body Classes and append to space name to fire Barba
function this_page() {
    if (is_page('home')) { 
        echo 'home';
    } elseif (is_category()) {
        echo 'blog';
    } elseif (is_page('about')) {
        echo 'about';
    } elseif (is_single()) {
        echo 'basic';
    } elseif (is_archive('team')) {
        echo 'team';
    } elseif (is_page('solutions')) {
        echo 'solutions';
    } elseif (is_home('blog')) {
        echo 'blog';
    } elseif (is_search()) {
        echo 'blog';
    } else {
        echo 'basic';
    }
}

// Order All Posts Date / DESC
add_action( 'pre_get_posts', 'my_change_sort_order'); 
function my_change_sort_order($query){
if(is_paged()):
    $query->set( 'order', 'DESC' );
    $query->set( 'orderby', 'date' );
endif;    
};

function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyDwthfpVNhd5zzCn5Q_nbMHTcIO9tXGdIY';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

