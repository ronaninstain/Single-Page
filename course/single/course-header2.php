<?php

/**
 * The template for displaying Course Header
 *
 * Override this template by copying it to yourtheme/course/single/header.php
 *
 * @author 		VibeThemes
 * @package 	vibe-course-module/templates
 * @version     2.0
 */
if (!defined('ABSPATH')) exit;
do_action('bp_before_course_header');

?>
<div class="col-md-6 col-sm-6">
	<div id="item-header-content">
		<div class="bb-for-bred">
			<?php vibe_breadcrumbs(); ?>
		</div>
		<div class="for-bb-tags">
			<p class="bb-1-tag"><a href="">Art</a></p>
			<p class="bb-2-tag"><a href="">Marketing</a></p>
		</div>
		<div class="bb-for-T-and-E">
			<h1><?php bp_course_name(); ?></h1>
			<?php the_excerpt(); ?>
		</div>

		<?php do_action('bp_before_course_header_meta'); ?>

		<div id="item-meta">
			<?php bp_course_meta(); ?>
			<?php do_action('bp_course_header_actions'); ?>

			<?php do_action('bp_course_header_meta'); ?>

		</div>
	</div><!-- #item-header-content -->
</div>
<div class="col-md-6 col-sm-6">
	<div id="item-header-avatar">
		<?php bp_course_avatar(); ?>
	</div><!-- #item-header-avatar -->
</div>
<?php
do_action('bp_after_course_header');
?>