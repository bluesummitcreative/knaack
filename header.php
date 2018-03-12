<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head(); ?>
        <?php if( get_field('tracking_id', 'option') ): ?>
            <!-- Google Analytics -->
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
                
                ga('create', '<?php the_field('tracking_id', 'option'); ?>', {'allowAnchor': true});
                ga('send', 'pageview', { 'page': location.pathname + location.search + location.hash});
            </script>
            <!-- End Google Analytics -->
        <?php endif; ?>
	</head>
	<body <?php body_class(); ?>>
	
	<header class="header fixed-top">
		<?php if( get_field('top_bar','option') ): ?>
		<div class="container-fluid top-bar text-right bg-primary">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<?php the_field('top_bar', 'option'); ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	  	<nav class="navbar navbar-expand-md navbar-light">		 
		  <div class="container">
			  <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
				<img src="<?php the_field('logo', 'option'); ?>" alt="<?php bloginfo('name'); ?> logo">
			  </a>
			  	
			  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			  </button>

			  	<?php
					wp_nav_menu( array(
					  'container'       => 'div',
					  'container_class' => 'collapse navbar-collapse',
					  'container_id'    => 'navbarSupportedContent',
					  'menu_class'      => 'navbar-nav ml-auto',
					  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					  'depth'           => 0,
					  'walker'          => new bootstrap_4_walker_nav_menu()
				   ) );
				?>
		  </div>
		</nav>

	</header>