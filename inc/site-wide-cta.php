<?php if( get_field('site_wide_cta') ): ?>
<div class="container-fluid container-padding site-wide-cta text-center">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php the_field('site_wide_cta'); ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>