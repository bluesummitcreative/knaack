<?php

	//add html5 support
	function wpdocs_after_setup_theme() {
		add_theme_support( 'html5', array( 'search-form' ) );
	}
	
	add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

	//Add New WordPress Title Tag 
	add_theme_support( 'title-tag' );
	
	//Add Support for Thumbnails
	add_theme_support( 'post-thumbnails' );
	
	//Set a default content width
	if ( ! isset( $content_width ) ) $content_width = 1170;
	
	// Apply theme's stylesheet to the visual editor.
		function bsc_add_editor_styles() {
			add_editor_style( get_stylesheet_uri() );
		}
	add_action( 'init', 'bsc_add_editor_styles' );
				
	//Add ACF Options Page
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page('Theme Options');
	}	
	
	//Numbered Pagination
	if ( !function_exists( 'wpex_pagination' ) ) {
		
		function wpex_pagination() {
			
			$prev_arrow = is_rtl() ? '&rarr;' : '&larr;';
			$next_arrow = is_rtl() ? '&larr;' : '&rarr;';
			
			global $wp_query;
			$total = $wp_query->max_num_pages;
			$big = 999999999; // need an unlikely integer
			if( $total > 1 )  {
				 if( !$current_page = get_query_var('paged') )
					 $current_page = 1;
				 if( get_option('permalink_structure') ) {
					 $format = 'page/%#%/';
				 } else {
					 $format = '&paged=%#%';
				 }
				echo paginate_links(array(
					'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format'		=> $format,
					'current'		=> max( 1, get_query_var('paged') ),
					'total' 		=> $total,
					'mid_size'		=> 3,
					'type' 			=> 'list',
					'prev_text'		=> $prev_arrow,
					'next_text'		=> $next_arrow,
				 ) );
			}
		}
		
	}

//Remove H1 from WP Editor
function remove_h1_from_editor( $settings ) {
    $settings['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;';
    return $settings;
}
add_filter( 'tiny_mce_before_init', 'remove_h1_from_editor' );
	
?>