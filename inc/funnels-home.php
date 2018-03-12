<?php if( have_rows('funnels') ): 

	$funnels = get_field_object('funnels');
   	$count = (count($funnels['value']));

	if ($count == 1) : $columns = 'col-sm-12';
	elseif ($count == 2): $columns = 'col-sm-6';
	elseif ($count == 3) :  $columns = 'col-sm-4';
	elseif ($count == 4) :  $columns = 'col-sm-3';
	elseif ($count == 6) :  $columns = 'col-sm-4';
	elseif ($count == 8) :  $columns = 'col-sm-3';
	elseif ($count == 9) :  $columns = 'col-sm-4';
	elseif ($count == 12) :  $columns = 'col-sm-1';
	else :  $columns = 'col-sm-1';
	endif;

?>
<div class="container-fluid container-padding funnels-home">
	<div class="container">
		<div class="row">
			<?php while ( have_rows('funnels') ) : the_row(); ?>
			<div class="<?php echo $columns ?>">
				<div class="funnel text-center">
				<?php the_sub_field('funnel'); ?>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>