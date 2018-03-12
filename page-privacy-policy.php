<?php
	get_header();
	get_template_part('inc/page-header');
?>
<div class="container-fluid container-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
			<h2>Your Privacy</h2>
			<p><?php bloginfo('name'); ?> has a privacy policy that is very strict, and designed to protect our users. Any demographic information that may be collected, including email addresses will not be sold or distributed in any way. It will only be used in order to better understand who our users are so that we may modify our site to better meet the needs of our users.</p>

			<h2>Collection of Personal Information</h2>
			<p>When visiting our site, the IP address used to access the site will be logged along with the dates and times of access. This information is purely used to analyze trends, administer the site, track users movement and gather broad demographic information for internal use. Most importantly, any recorded IP addresses are not linked to personally identifiable information.</p>

			<h2>Customer Submitted Testimonials</h2>
			<p><?php bloginfo('name'); ?> reserves the right to publish customer submitted testimonials on any <?php bloginfo('name'); ?> products and services. Any material contained in mail, email, or forms submitted to <?php bloginfo('name'); ?> may be used in promotional materials or published on our site.</p>

			<h2>Changes to this Privacy Statement</h2>
			<p>The contents of this statement may be altered at any time, at our discretion. If you have any questions regarding the privacy policy of <?php bloginfo('name'); ?>, then you may contact us here.</p>

			<p><em>Last updated <?php echo $monday = date( get_option( 'date_format' ), strtotime( 'monday this week' ) ); ?></em></p>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php
	get_footer();
?>