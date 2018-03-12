<?php if ( is_home() ) { ?>
<div class="container-fluid page-header" style="background:url(<?php if ( get_field( 'image', get_option('page_for_posts') ) ): ?><?php the_field('image', get_option('page_for_posts')); ?><?php else: ?>/wp-content/uploads/page-header-default.png<?php endif;?>
) no-repeat;background-size:cover;">
<?php } else { ?>
<div class="container-fluid page-header" style="background:url(<?php if ( get_field( 'page_header_image' ) ): the_field('page_header_image'); else: ?>/wp-content/uploads/page-header-default.png<?php endif;?>
) no-repeat;background-size:cover;">
<?php } ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1>
				<?php
					if ( is_home() ) { 
                            echo 'Education';
                        } elseif ( is_404() ) { 
						echo '404 Not Found';
					} elseif ( is_search() ) { 
						echo $wp_query->found_posts . ' results found for "' . esc_html( get_search_query( false ) ) .'"';
					} else { 
						if( get_field('field_name')) {
							the_field('page_header_title');
						} else {
							the_title();
						}
					} 
				?>
				</h1>
			</div>
		</div>
	</div>
</div>

