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
<div id="contact" style="background-image: url(<?php echo $image['url']; ?>);">
	<div class="container">
		<div class="col">
			<div class="container title">
				<div class="col text-center">
					<h1><?php the_sub_field('title');?></h1>
				</div>
			</div>
			<div class="container cols-12 grid-gap cols-sm-24 no-sm-gutter text-left">
				<?php if( have_rows('contact_info', 'options') ):
		            		while( have_rows('contact_info', 'options') ): the_row(); ?>
					<div class="col contact-details">
						<div>
							<a href="tel:<?php the_sub_field("mobile"); ?>"><?php the_sub_field("mobile"); ?></a>
						</div>
						<div>
							<a href="tel:<?php the_sub_field("phone"); ?>"><?php the_sub_field("phone"); ?></a>
						</div>
						<div>
							<a href="tel:<?php the_sub_field("email"); ?>"><?php the_sub_field("email"); ?></a>
						</div>
						<br/>
						<div>
							<?php the_sub_field("address"); ?>
						</div>
					</div>
				<?php endwhile; endif;?>
					<div class="col slow-fade" id="contact_form">
						<?php if( get_sub_field('contact_form_shortcode') ): ?>
							<?php echo do_shortcode( get_sub_field('contact_form_shortcode') ); ?>
						<?php endif; ?>
					</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; endif;?>
<?php get_footer();?>
