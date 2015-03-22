<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package materialwp
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="site-info pull-right">

					<div>Icon made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>

						<?php printf( __( '%1$s by %2$s.', 'materialwp' ), 'MaterialWP', '<a href="http://braginteractive.com" target="_blank" rel="designer">Brad Williams</a>' ); ?>
					</div><!-- .site-info -->
				</div> <!-- col-lg-12 -->
			</div><!-- .row -->
		</div><!-- .containr -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
