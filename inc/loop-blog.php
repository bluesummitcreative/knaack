<div class="col-sm-9 order-last">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="row post">
		<?php if(has_post_thumbnail()) { ?>
			<div class="col-sm-3">
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array('class' => 'img-responsive'));?></a>
			</div>
			<div class="col-sm-9">
			<?php } else { ?>
			<div class="col-sm-12">
			<?php } ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>
			</div>
	</div>
	
	<?php wp_link_pages(); ?>
    <?php endwhile; endif; ?>
    <?php wpex_pagination(); ?>
</div>