<?php
/**
 * The template for displaying the footer
 * @package rossross
 */
?>

</main>

<footer class="footer <?php if (is_page_template('page-templates/home.php')) {?>home_footer<?php }?>">

	<div class="pre-socket"></div><!--pre-socket-->

	<div class="socket">

		<div class="container cols-7-10-7 cols-sm text-center-sm">

			<div class="col colophon">Copyright &copy; <?php echo date ('Y');?> Ross & Ross Consulting Limited</div>

			<div class="col silverless">
				<a href="https://silverless.co.uk"><?php get_template_part('inc/img/silverless', 'logo');?></a>
			</div>

			<div class="col mandatory">
				<div id="regulated">
					<?php get_template_part("inc/img/RICS"); ?><br/>
				</div>
				<div>
					<a href="<?php echo home_url() . '/terms-conditions'; ?>">Terms</a>

					<span class="divider">|</span>

					<a href="<?php echo home_url() . '/privacy-policy'; ?>">Privacy</a>
				</div>
			</div>

		</div>

	</div>

	</div><!--socket-->

</footer>

</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
