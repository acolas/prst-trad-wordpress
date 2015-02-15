<?php
/**
 * Template Name: Carousel
 *
 * Displays portfolio in carousel.
 *
 * @package PathChild
 * @subpackage Template
 * @since 0.1.0
 */

get_header(); // Loads the header.php template. ?>


<h1>Références et échantillons</h1>
                    <div id="myCarousel" class="carousel">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="active item">
                                <a target="_blank" href="http://www.pompage.net/traduction/placer-des-labels-dans-leur-zone-de-texte"><img src="http://www.anthony-colas.fr/wordpress/wp-content/uploads/2012/03/pompage-1.png" alt="" title="Comment bien placer des labels dans leur zone de texte" width="660" height="300" class="aligncenter size-full wp-image-209" /></a>
                                <div class="carousel-caption">
                                    <h4>Traduction pour le site pompage.net</h4>
                                    <p>Comment bien placer des labels dans leur zone de texte</p>
                                </div>
                            </div>
                            <div class="item">
                                <a target="_blank" href="http://www.pompage.net/traduction/la-cryptographie-et-le-web-hachage"><img src="http://www.anthony-colas.fr/wordpress/wp-content/uploads/2012/03/pompage-2.png" alt="" title="La cryptographie et le Web : hachage, salage et autres recettes..." width="660" height="300" class="aligncenter size-full wp-image-210" /></a>
                                <div class="carousel-caption">
                                    <h4>Traduction pour le site pompage.net</h4>
                                    <p>La cryptographie et le Web : hachage, salage et autres recettes...</p>
                                </div>
                            </div>
<div class="item">
                                <a target="_blank" href="http://www.eyrolles.com/Informatique/Livre/gestion-commerciale-et-marketing-avec-openerp-9782212133806"><img src="http://www.anthony-colas.fr/wordpress/wp-content/uploads/2013/01/openerp_586.png" alt="" title="Gestion commerciale et marketing avec openerp" width="660" height="300" class="aligncenter size-full wp-image-210" /></a>
                                <div class="carousel-caption">
                                    <h4>Gestion commerciale & marketing avec OpenERP</h4>
                                    <p>de Fabien Pinckaers et Els Van Vossel − Éditions Eyrolles</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a><a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                    </div>



	</div>

	<div class="wrap">

	<?php do_atomic( 'before_content' ); // path_before_content ?>

	<div id="content">

		<?php do_atomic( 'open_content' ); // path_open_content ?>

		<div class="hfeed">

			<?php get_template_part( 'loop-meta' ); // Loads the loop-meta.php template. ?>

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', ( post_type_supports( get_post_type(), 'post-formats' ) ? get_post_format() : get_post_type() ) ); ?>


					<?php if ( is_singular() ) { ?>
					
						<?php do_atomic( 'after_singular' ); // path_after_singular ?>
					
						<?php get_sidebar( 'after-singular' ); // Loads the sidebar-after-singular.php template. ?>

						<?php // comments_template( '/comments.php', true ); // Loads the comments.php template. ?>

					<?php } ?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'loop-error' ); // Loads the loop-error.php template. ?>

			<?php endif; ?>

		</div><!-- .hfeed -->

		<?php do_atomic( 'close_content' ); // path_close_content ?>

		<?php get_template_part( 'loop-nav' ); // Loads the loop-nav.php template. ?>

	</div><!-- #content -->

	<?php do_atomic( 'after_content' ); // path_after_content ?>

<?php get_footer(); // Loads the footer.php template. ?>