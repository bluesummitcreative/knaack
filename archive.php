<?php
	get_header();
	get_template_part('inc/page-header');
?>
<div class="container-fluid container-padding">
	<div class="container">
		<div class="row">
		<?php
			get_template_part('inc/loop-blog');
			get_sidebar();
			?>
		</div>
	</div>
</div>
<?php
	get_footer();
?>