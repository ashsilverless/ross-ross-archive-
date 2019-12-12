<?php
/**
 * ============== Template Name: Contact Page
 *
 * @package rossross
 */
get_header();?>

<?php if( have_rows('page_settings') ):
    while( have_rows('page_settings') ): the_row(); 
    $image = get_sub_field('background_image');?>
<div id="contact" style="background-image: url(<?php echo $image['url']; ?>);" class="hero">
	<div class="container cols-24 text-center">
		<div class="col">
			<h1><?php the_sub_field('title');?></h1>
		</div>
	</div>
	<div class="container cols-10-4-10 text-center">
		<div class="col">
			<h1><?php the_sub_field('title');?></h1>
		</div>
		<div class="col"></div>
		<div class="col">
			<h1><?php the_sub_field('title');?></h1>
		</div>
	</div>
</div>
<?php endwhile; endif;?>

<?php get_footer();?>