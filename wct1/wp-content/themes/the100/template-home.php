<?php
/**
 *	Template Name:Homepage
 *
 */

get_header();
if(get_the_content()){
	?>
	<section class="homepage-content">
		<div class="ed-container">
			<?php the_content();?>
		</div>
	</section>
	<?php
}
 do_action('the100_belowslider_section');
?> <div id="1"> <?php do_action('the100_featured_section'); ?> </div> <?php
do_action('the100_team_section');
?> <div id="2"><br><br> <?php do_action('the100_gallery_section'); ?> </div> <?php
?> <div id="3"><br><br> <?php do_action('the100_aboutservice_section'); ?> </div> <?php
do_action('the100_counter_section');
?> <div id="4"><br><br> <?php do_action('the100_testimonial_partner_section');  ?> </div> <?php
?> <div id="5"><br><br> <?php do_action('the100_blog_section'); ?> </div> <?php
do_action('the100_abovefooter_section');
get_footer();
