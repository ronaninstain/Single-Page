<?php
if (!defined('ABSPATH')) exit;
?>
<section class="BB-course-header">
	<?php do_action('wplms_before_title'); ?>
	<div class="course_header">
		<div class="bb-for-adjusting-width">
			<div class="<?php echo vibe_get_container(); ?>">
				<div class="row">
					<div id="item-header" role="complementary">
						<?php locate_template(array('course/single/course-header2.php'), true); ?>
					</div><!-- #item-header -->
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div id="item-nav">
		<div class="<?php echo vibe_get_container(); ?>">
			<div class="item-list-tabs no-ajax" id="object-nav" role="navigation">
				<ul>
					<?php
					if (is_user_logged_in()) {
						$user = wp_get_current_user();
						$allowed_roles  = array('administrator', 'developer');
						// if ( array_intersect($allowed_roles, $user->roles) ) {
						// 	bp_get_options_nav();
						// }
						if (array_intersect($allowed_roles, $user->roles)) {
					?>
							<!-- Admin nav start -->
							<?php bp_get_options_nav(); ?>
							<?php

							if (function_exists('bp_course_nav_menu'))
								bp_course_nav_menu();


							?>
							<?php do_action('bp_course_options_nav'); ?>
							<!-- Admin nav end -->
					<?php }
					} ?>

				</ul>
			</div>
		</div><!-- #item-nav -->
	</div>
</section>
<section class="BB-content">
	<div id="buddypress">
		<div class="<?php echo vibe_get_container(); ?>">
			<?php do_action('bp_before_course_home_content'); ?>
			<div class="row for-order-change">
				<div class="col-md-9 col-sm-8 content-col">