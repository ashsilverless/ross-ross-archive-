<?php
/**
 * ============== Template Name: Standard Page
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
				<?php if( get_field('introduction_heading') ): ?>
					<h2><?php the_sub_field('introduction_heading');?></h2>
				<?php endif; ?>
				<?php the_sub_field('introduction_text');?>
				<?php if( get_field('introduction_text_read_more') ): ?>
					<?php the_sub_field('introduction_text_read_more');?>
					<a class="button read-more" href="#"><span><?php the_sub_field('introduction_read_more');?></span></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php endwhile; endif;?>

<!--MAIN CONTENT-->
<?php if( have_rows('content') ):
    		while( have_rows('content') ): the_row(); ?>
	<div id="content" class="boxed-content">
		<div class="container cols-offset2-9-2-9">
			<div class="col">
				<?php the_sub_field('left_column');?>
			</div>
			<div class="col"></div>
			<div class="col">
				<?php the_sub_field('right_column');?>
			</div>
		</div>
	</div>
<?php endwhile; endif;?>

<!--SERVICES-->
<?php if( have_rows('services') ):
    while( have_rows('services') ): the_row(); ?>
    <div class="services">
    	<div class="services-container">
    		<div class="container cols-offset2-20">
				<div class="col services-tab">
    				<?php if( have_rows('section_content') ):
    					while( have_rows('section_content') ): the_row(); ?>
    						<div class="tab text-center selected">
    							<?php the_sub_field('title');?>
    						</div>
    				<?php endwhile; endif;?>
				</div>
    		</div>
    	</div>
    	<div class="services-content-container">
    		<div class="container cols-offset2-20">
    			<div class="col services-tab">
	    			<?php if( have_rows('section_content') ):
	    				while( have_rows('section_content') ): the_row(); ?>
	    					<div class="">
								<?php the_sub_field('content');?>
							</div>
	    			<?php endwhile; endif;?>
	    		</div>
    		</div>
    	</div>
    </div>
<?php endwhile; endif;?>

<?php get_footer();?>
