<?php
	get_header();
	get_template_part('inc/page-header');
?>
<div class="container-fluid container-padding">
	<div class="container">
		<div class="row">
		<div class="col-sm-12 text-center">
			<p> We're sorry. We can't seem to find what you're looking for. Please select from the menu above or try searching.</p>
			<?php get_search_form(); ?>
		</div>
		</div>
	</div>
</div>
<?php
	get_footer();
?>