<?php
/**
 * The template for displaying the footer
 * @package rossross
 */
?>

</main>

<footer class="footer">

	<div class="pre-socket"></div><!--pre-socket-->

	<div class="socket">

		<div class="container cols-7-10-7">

			<div class="col colophon">Copyright &copy; <?php echo date ('Y');?> Ross & Ross Consulting Limited</div>

			<div class="col silverless">
				<a href="https://silverless.co.uk"><?php get_template_part('inc/img/silverless', 'logo');?></a>
			</div>

			<div class="col mandatory">
				<div>
					<img src="https://via.placeholder.com/150x150"><br/>
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
