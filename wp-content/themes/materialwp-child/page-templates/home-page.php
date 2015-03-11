<?php
/**
 * Template Name: Template Home Full Page
 *
 * Template for pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package materialwp
 * @subpackage Template
 * @since 0.0.1 
 */
get_header(); ?>

<div class="container">
	<div class="row">

	<div id="primary" class="col-md-12">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>
