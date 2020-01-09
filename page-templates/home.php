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
	<?php get_template_part("template-parts/intro-content"); ?>
<?php endwhile; endif;?>

<!--RESIDENTIAL & HOSTPITALITY BLOCKS -->
<?php if( have_rows('overview_blocks') ):
    		while( have_rows('overview_blocks') ): the_row(); ?>
	<div id="residential-hospitality" class="boxed-content">
		<div class="container container-small grid-gap no-sm-gutter text-center cols-12 cols-sm">
			<?php if( have_rows('section_blocks') ):
					while( have_rows('section_blocks') ): the_row();
						$colour = get_sub_field_object( 'cta_colour' );
						$colourValue = $colour['value'];
						$image = get_sub_field('background_image');
						?>
				<div class="col overview-block-container container slide-up">
					
						<div class="overview-block col" style="background-image:url(<?php echo $image['url']; ?>);">
							<div>
								<h3><?php the_sub_field('title');?></h3>
								<a class="button <?php echo esc_attr($colourValue);?>" href="<?php the_sub_field('cta_target');?>"><span><?php the_sub_field('cta_title');?></span></a>
							</div>
						</div>
				</div>
			<?php endwhile; endif;?>
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
