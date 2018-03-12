	<footer class="footer">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p class="copyright">Copyright &copy <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a<?php if (!is_front_page()) { ?> rel="nofollow"<?php } ?> target="_blank" href="https://www.bluesummitcreative.com/">Website Design by Blue Summit Creative</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<?php wp_footer(); ?>
	</body>
</html>