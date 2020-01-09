<?php
	$caseStudy = get_posts(array(
		'post_type' => 'case_studies',
		'posts_per_page' => -1,
		'exclude'   => array(get_the_id()),
));
if($caseStudy && sizeof($caseStudy) > 0): ?>
<div id="case-studies" class="boxed-content">
	<div class="container cols-offset3-18 text-center">
		<div class="col">
			<h2>Case Studies</h2>
		</div>
	</div>
	<div class="container container-small grid-gap no-sm-gutter text-center cols-12 cols-sm">
		<?php foreach($caseStudy as $caseStudy):
				$image = get_field("hero_background_image", $caseStudy->ID); $url = $image["sizes"]["medium_large"];?>

			<div class="col overview-block-container container slide-up">
				<div class="overview-block col" style="background-image:url(<?php echo $image['url']; ?>);">
					<div>
						<h3><?php echo $caseStudy->post_title; ?></h3>
						<a class="button" href="<?php echo get_permalink($caseStudy->ID); ?>"><span>Read More</span></a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<?php endif; ?>