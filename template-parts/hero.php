<?php
if( get_field('hero_type') == 'image' ):
	$heroImage = get_field('hero_background_image');
elseif ( get_field('hero_type') == 'color' ):
	$heroColor = get_field('hero_background_colour');
endif;?>

<div class="hero <?php the_field('hero_height');?>" style="background-image: url(<?php echo $heroImage['url']; ?>); background-color: <?php echo $heroColor; ?>;">

    <div class="container">
		<div class="col">
		    <div class="hero__content <?php if (is_page_template('page-templates/home.php')) {?>home_hero<?php }?>">
                <div class="inner-section">
                	<div class="company-title">
                		<?php if (is_page_template('page-templates/home.php')) {?>
                			<img src="https://via.placeholder.com/300x150">
                		<?php }?>
	                	
	                    <h1 class="heading heading__md heading__light mt0 mb0">
	                    	<?php the_field('hero_heading');?>
	                    </h1>
	                    <h2>
	                    	<?php the_field('hero_subheading');?>
	                    </h2>
	                </div>
	                <div class="company-copy">
	                    <h3>
	                    	<?php the_field('hero_copy');?>
	                    </h3>
	                </div>
	                <div id="scroll-icon">
	                	<?php if( have_rows('button') ):
    						while( have_rows('button') ): the_row(); ?>
	                			<a href="<?php the_sub_field('button_target');?>" class="explore"><span></span></a>
	                	<?php endwhile; endif;?>
	                </div>
                </div>
		    </div>
		</div>
	</div>

</div><!--hero-->