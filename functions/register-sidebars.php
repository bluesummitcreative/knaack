<?php
	// Register Sidebars
	
	function custom_sidebars() {
		register_sidebar( 
			array(
				'name' => __('Default Page Sidebar'),
				'id' => 'sidebar-1',
				'before_widget' => '<div class="widget">',
				'after_widget' => '</div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>',
				)
		);
		
		register_sidebar( 
			array(
				'name' => __( 'Blog Sidebar'),
				'id' => 'sidebar-2',
				'before_widget' => '<div class="widget">',
				'after_widget' => '</div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>',
				)
		);
		
	}
	add_action( 'widgets_init', 'custom_sidebars' );
?>