<?php
/**
 * ============== Template Name: Home Page
 *
 * @package rossross
 */
get_header();?>

<!--HERO-->

<?php get_template_part("template-parts/hero"); ?>

<!--INTRODUCTION-->
<?php if( have_rows('introduction') ):
    		while( have_rows('introduction') ): the_row(); ?>
	<div id="introduction" class="boxed-content">
		<div class="container cols-offset4-16 text-center read_more_container">
			<div class="col">
				<h2><?php the_sub_field('introduction_heading');?></h2>
				<?php the_sub_field('introduction_text');?>
				<?php the_sub_field('introduction_text_read_more');?>
				<a class="button read-more" href="#"><span><?php the_sub_field('introduction_read_more');?></span></a>
			</div>
		</div>
	</div>
<?php endwhile; endif;?>

<!--RESIDENTIAL & HOSTPITALITY BLOCKS -->
<?php if( have_rows('overview_blocks') ):
    		while( have_rows('overview_blocks') ): the_row(); ?>
	<div id="residential-hospitality" class="boxed-content">
		<div class="container cols-offset3-18 text-center">
			<div class="col overview-block-container">
				<?php if( have_rows('section_blocks') ):
					while( have_rows('section_blocks') ): the_row();
						$colour = get_sub_field_object( 'cta_colour' );
						$colourValue = $colour['value'];
						$image = get_sub_field('background_image');
						?>
					<div class="overview-block" style="background-image:url(<?php echo $image['url']; ?>);">
						<div>
							<h3><?php the_sub_field('title');?></h3>
							<a class="button <?php echo esc_attr($colourValue);?>" href=""><span><?php the_sub_field('cta_title');?></span></a>
						</div>
					</div>
				<?php endwhile; endif;?>
			</div>
		</div>

		<?php if( have_rows('testimonial') ):
			while( have_rows('testimonial') ): the_row(); ?>
				<?php get_template_part("template-parts/testimonial"); ?>
		<?php endwhile; endif;?>

		<?php if( have_rows('contact_box') ):
			while( have_rows('contact_box') ): the_row(); ?>
				<?php get_template_part("template-parts/contact-box"); ?>
		<?php endwhile; endif;?>
		
	</div>
<?php endwhile; endif;?>
<?php get_footer();?>
