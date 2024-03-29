<?php
/**
 * ============== Template Name: Standard Page
 *
 * @package rossross
 */
get_header();?>

<!--HERO-->

<?php get_template_part("template-parts/hero"); ?>

<?php

$colour = get_field('page_colour');

?>

<!--INTRODUCTION-->

<?php if( have_rows('introduction') ):
    while( have_rows('introduction') ): the_row(); ?>
	<?php get_template_part("template-parts/intro-content"); ?>
<?php endwhile; endif;?>

<!--MAIN CONTENT-->
<?php if( have_rows('content') ):
    		while( have_rows('content') ): the_row(); ?>
	<div id="content" class="boxed-content <?php echo $colour;?>">
		<div class="container grid-gap container-small cols-24 no-sm-gutter ">
			<div class="col content_double">
				<?php the_sub_field('left_column');?>
			</div>
		</div>
	</div>
<?php endwhile; endif;?>

<!--SERVICES-->
<?php if( have_rows('services') ):
	$row = 1;
    while( have_rows('services') ): the_row(); ?>
    <div class="services <?php echo $colour;?>">
    	<div class="services-container">
    		<div class="container cols-offset2-20">
				<div class="col services-tab">
    				<?php if( have_rows('section_content') ):
    					while( have_rows('section_content') ): the_row();
    						$icon = get_sub_field('icon');
    						?>
    						<div class="tab text-center <?php if($row == 1) {echo 'selected';}?>" data-tab="services-tab-<?php echo get_row_index(); ?>">
    							<img src="<?php echo $icon['url']; ?>" alt="<?php the_sub_field('title');?>" /><br/>
    							<span><?php the_sub_field('title');?></span>
    						</div>
    				<?php $row++; endwhile; endif;?>
				</div>
    		</div>
    	</div>
    	<div class="services-content-container">
    		<div class="container cols-offset2-20">
    			<div class="col services-tab">
	    			<?php if( have_rows('section_content') ):
	    				$row = 1;
	    				while( have_rows('section_content') ): the_row();
	    					$icon = get_sub_field('icon');?>
	    					<div class="services-tab-content <?php if($row == 1) {echo 'selected';}?>" id="services-tab-<?php echo get_row_index(); ?>">
	    						<div class="icon text-center hide-sm">
	    							<img src="<?php echo $icon['url']; ?>" alt="<?php the_sub_field('title');?>" />
	    						</div>
	    						<div class="content">
		    						<h3><?php the_sub_field('title');?></h3>
									<?php the_sub_field('content');?>
								</div>
							</div>
	    			<?php $row++; endwhile; endif;?>
	    		</div>
    		</div>
    	</div>
    </div>

<?php endwhile; endif;?>

<!-- CASE STUDIES -->

<?php get_template_part("template-parts/case-studies-list"); ?>

<div class="boxed-content <?php echo $colour;?>">
	<!--TESTIMONIAL-->
	<?php if( have_rows('testimonial') ):
		while( have_rows('testimonial') ): the_row(); ?>
			<?php get_template_part("template-parts/testimonial"); ?>
	<?php endwhile; endif;?>

	<!--CONTACT BOX-->
	<?php if( have_rows('contact_box') ):
		while( have_rows('contact_box') ): the_row(); ?>
			<?php get_template_part("template-parts/contact-box"); ?>
	<?php endwhile; endif;?>
</div>

<?php get_footer();?>
