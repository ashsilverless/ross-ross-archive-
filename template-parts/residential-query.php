<?php  $args = array(
	'post_type'              => array( 'case_studies' ),
	'posts_per_page' => -1,
	'tax_query' => array(
		array(
		'taxonomy' => 'type',
		'field' => 'slug',
		'terms' => 'residential'
		 )
	 ),
	'exclude'   => array(get_the_id()),
);
$query = new WP_Query( $args );
if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
get_template_part("template-parts/case-studies-item");
endwhile; endif; wp_reset_postdata();?>
