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
						?>
					<div class="overview-block" style="background-image:url('https://via.placeholder.com/800x800');">
						<h3><?php the_sub_field('title');?></h3>
						<a class="button <?php echo esc_attr($colourValue);?>" href=""><span><?php the_sub_field('cta_title');?></span></a>
					</div>
				<?php endwhile; endif;?>
			</div>
		</div>
		<div class="container cols-offset4-16 text-center">
			<div class="col">
			<?php if( have_rows('testimonial') ):
    			while( have_rows('testimonial') ): the_row(); ?>
				<blockquote>
					<?php the_sub_field('testimonial_content');?>
					<footer><?php the_sub_field('customer_name');?></footer>
				</blockquote>
			</div>
			<?php endwhile; endif;?>
		</div>
		<div class="container cols-offset5-14 text-center">
			<?php if( have_rows('contact_box') ):
    			while( have_rows('contact_box') ): the_row(); ?>
				<div class="col contact-cta">
					<i class="fas fa-comments"></i><br/>
					<p><?php the_sub_field('title');?></p>
					<a class="button" href="<?php the_sub_field('cta_link');?>"><span><?php the_sub_field('cta_title');?></span></a>
				</div>
			<?php endwhile; endif;?>
		</div>
	</div>
<?php endwhile; endif;?>
<?php get_footer();?>
