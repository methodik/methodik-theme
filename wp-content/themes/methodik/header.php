<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js <?php if ( is_front_page() ) { ?> index <?php } ?>" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width">
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ''; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="http://methodik.co.uk/wp-content/themes/methodik/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/screen.css">
	
	<!--[if IE]>
            <link href="<?php bloginfo('template_directory'); ?>/stylesheets/ie-clean.css" media="screen, projection" rel="stylesheet" type="text/css" />
        <![endif]-->

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<header class="siteHeader">
            <a href="http://methodik.co.uk/" class="logoContainer">
                <img src="<?php bloginfo('template_directory'); ?>/img/methodik-logo-tight.svg" class="logoIcon" alt="Methodik, web design & digital agency logo"/>
                <h1 class="logo">methodik</h1>
            </a> 
            <h1 class="lobster tagline">a <span class="lightBlue">small</span> team of <span class="yellow">digital</span> creatives building a better <span class="red">web</span></h1>
            
        </header>

        <?php if ( is_front_page() ) { 
        	$homeURL = 'http://methodik.co.uk/'
        	?>

			<nav class="mainNavigation">
            <span class="button-text" id="mobNav">menu</span>
            <ul class="navContainer" id="navContainer">
                <li><a href="#work" class="workLink">work</a></li>
                <li><a href="#about-section" class="aboutLink">about</a></li>
                <li><a href="#whatwedo" class="whatwedoLink">what we do</a></li>
                <li><a href="<?php echo $homeURL ?>the-process">the process</a></li>
                <li><a href="#statistics" class="statisticsLink">statistics</a></li>
                <li><a href="#contact" class="contactLink">contact</a></li>
                <li class="placeholder"></li>
            </ul>
        </nav>

    	<?php } else {
    			$homeURL = 'http://methodik.co.uk/' ?>

    	<nav class="mainNavigation">
            <span class="button-text" id="mobNav">menu</span>
            <ul class="navContainer" id="navContainer">
                <li><a href="<?php echo $homeURL ?>#!work" class="workLink">work</a></li>
                <li><a href="<?php echo $homeURL ?>#!about-section" class="aboutLink">about</a></li>
                <li><a href="<?php echo $homeURL ?>#!what-we-do" class="whatwedoLink">what we do</a></li>
                <li><a href="<?php echo $homeURL ?>the-process">the process</a></li>
                <li><a href="<?php echo $homeURL ?>#!statistics" class="statisticsLink">statistics</a></li>
                <li><a href="<?php echo $homeURL ?>#!contact" class="contactLink">contact</a></li>
                <li class="placeholder"></li>
            </ul>
        </nav>

    	<?php } ?>

        