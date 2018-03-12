<?php
	//Enqueue Styles and Scripts
	function bsc_enqueue_styles_scripts() {
		wp_enqueue_style( 'bootstrap.min', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css'); // Bootstrap CSS
		wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.0.1/css/all.css'); // Font Awesome
		wp_enqueue_script( 'html5shiv.min', '//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js' ); //HTML5 Shiv
		wp_script_add_data( 'html5shiv.min', 'conditional', 'lt IE 9' ); //Get HTML Shiv if less than IE9
		wp_enqueue_script( 'respond.min', '//oss.maxcdn.com/respond/1.4.2/respond.min.js' ); //Respond JS
		wp_script_add_data( 'respond.min', 'conditional', 'lt IE 9' ); //Get Respond JS if less than IE9
		
		wp_enqueue_script ('jquery'); 
		wp_enqueue_script( 'popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', $deps, $ver, true); //Popper JS
		wp_enqueue_script( 'bootstrap.min', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js', $deps, $ver, true); //Bootstrap JS
	} 
		
	if (!is_admin()) add_action( 'wp_enqueue_scripts', 'bsc_enqueue_styles_scripts' ); //Load styles and scripts on non-admin screens
?>
