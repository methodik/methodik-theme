<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"), false, '1.9.1', true);
	   wp_enqueue_script('jquery');

       // Register scripts

       wp_register_script('html5shiv', get_bloginfo('template_directory') . "/js/html5shiv.js", true, '-minified', false);
       wp_enqueue_script('html5shiv');
       
       wp_register_script('modernizr', get_bloginfo('template_directory') . "/js/vendor/modernizr-2.6.2.min.js", true, '-minified', false);
       wp_enqueue_script('modernizr');

       wp_register_script('plugins', get_bloginfo('template_directory') . "/js/plugins-ck.js", true, '-minified', true);
       wp_enqueue_script('plugins');

       if ( !is_front_page() ) {
            // load fit vids
            wp_register_script('fitvid', get_bloginfo('template_directory') . "/js/jquery.fitvids.js", true, '-not-minified', true);
            wp_enqueue_script('fitvid');
        }

       wp_register_script('main', get_bloginfo('template_directory') . "/js/main.js", true, '-not-minified', true);
       wp_enqueue_script('main');

    }

    // Custom shortcodes

    //[foobar]
    function getRoot(){
        return get_bloginfo('template_directory');
    }
    add_shortcode( 'rootDir', 'getRoot' );

	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

?>