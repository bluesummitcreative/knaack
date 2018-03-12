<div class="col-sm-3 order-first sidebar">
<?php 
	if(is_home() ) {
		if ( is_active_sidebar( 'sidebar-2' ) ) : 
			dynamic_sidebar( 'sidebar-2' ); 
		endif;
	} else {
		if ( is_active_sidebar( 'sidebar-1' ) ) : 
			dynamic_sidebar( 'sidebar-1' ); 
		endif;
	} 
?>
</div>