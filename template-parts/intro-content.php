<?php
	if( get_field('page_colour') ){
		$colour = get_field('page_colour');
	}
	else {
		$colour = 'green';
	}
;?>

<div id="introduction" class="boxed-content <?php echo $colour;?>">
	<div class="container cols-offset6-12 cols-sm-offset2-20 text-center read_more_container">
		<div class="col">
			<?php if( get_field('introduction_heading') ): ?>
				<h2><?php the_sub_field('introduction_heading');?></h2>
			<?php endif; ?>
			<?php the_sub_field('introduction_text');?>
			<?php if( get_sub_field('introduction_text_read_more') ): ?>
				<?php the_sub_field('introduction_text_read_more');?>
				<a class="button read-more" href="#"><span><?php the_sub_field('introduction_read_more');?></span></a>
			<?php endif; ?>
		</div>
	</div>
</div>
