<?php $image = get_field("hero_background_image"); ?>
<div class="col overview-block-container container slide-up">
    <div class="overview-block col" style="background-image:url(<?php echo $image['url']; ?>);">
        <div>
            <h3><?php the_title(); ?></h3>
            <a class="button" href="<?php echo get_permalink($caseStudy->ID); ?>"><span>Read More</span></a>
        </div>
    </div>
</div>
