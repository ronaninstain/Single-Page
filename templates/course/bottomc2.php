<?php
if (!defined('ABSPATH')) exit;
do_action('wplms_single_course_content_end');
?>
</div>
<div class="col-md-3 col-sm-4 sidebar-col">
	<div class="widget pricing" id="course-pricing">
		<?php the_course_details(); ?>
		<?php the_course_button(); ?>
	</div>
	<?php
	$sidebar = apply_filters('wplms_sidebar', 'coursesidebar', get_the_ID());
	if (!function_exists('dynamic_sidebar') || !dynamic_sidebar($sidebar)) : ?>
	<?php endif; ?>
</div>
</div><!-- .row -->
</div><!-- .container -->
</div><!-- #buddypress -->
</section>