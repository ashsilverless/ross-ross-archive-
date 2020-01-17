<div id="case-studies" class="boxed-content">
	<div class="container cols-offset3-18 text-center">
		<div class="col">
			<h2>Case Studies</h2>
		</div>
	</div>
	<div class="container container-small grid-gap no-sm-gutter text-center cols-12 cols-sm">
		<?php if (is_page( 'hotel-property-management' )) {
			get_template_part("template-parts/hotel-query");
		} else {
			get_template_part("template-parts/residential-query");
		} ?>
	</div>
</div>
