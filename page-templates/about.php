<?php
/**
 * ============== Template Name: About Page
 *
 * @package rossross
 */
get_header();?>

<!--HERO-->

<?php get_template_part("template-parts/hero"); ?>

<?php 
$colour = get_field('page_colour')
;?>

<!--INTRODUCTION-->


<?php if( have_rows('introduction') ):
    		while( have_rows('introduction') ): the_row(); ?>
	<div id="introduction" class="boxed-content <?php echo $colour;?>">
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

<!--TEAM-->
<?php if( have_rows('team') ): ?>
	<div id="team" class="boxed-content">
		<div class="container cols-offset2-8-8 read_more_container">
			<?php while( have_rows('team') ): the_row();
				$image = get_sub_field('image');?>
				<div class="col">
					<?php if( get_sub_field('image') ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php get_sub_field('name') ?>"/>
					<?php else: ?>
						<div class="image_placeholder"></div>
					<?php endif; ?>
					<h3 class="name"><?php the_sub_field('name');?></h3>
					<div class="title"><?php the_sub_field('title');?></div>
					<div class="phone"><a href="tel:<?php the_sub_field('mobile');?>"><?php the_sub_field('mobile');?></a></div>
					<div class="phone"><a href="tel:<?php the_sub_field('phone');?>"><?php the_sub_field('phone');?></a></div>
					<div class="email"><a href="mailto:<?php the_sub_field('email');?>"><?php the_sub_field('email');?></a></div>
					<?php the_sub_field('info');?>
					<?php if( get_sub_field('additional_info') ): ?>
						<?php the_sub_field('additional_info');?>
						<a class="button read-more button-alt" href="#"><span>Read More</span></a>
					<?php endif; ?>
				</div>
			<?php endwhile;?>
		</div>
	</div>
<?php endif;?>

<?php get_footer();?>