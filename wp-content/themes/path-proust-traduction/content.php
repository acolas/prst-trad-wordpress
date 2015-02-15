<?php
/**
 * Content Template
 *
 * Template used to show post content when a more specific template cannot be found.
 *
 * @package Path
 * @subpackage Template
 * @since 0.1.0
 */

do_atomic( 'before_entry' ); // path_before_entry ?>

<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

	<?php do_atomic( 'open_entry' ); // path_open_entry ?>

	<?php if ( is_singular() ) { ?>
	

		<script>

var $j = jQuery.noConflict();
	$j(document).ready(function(event){
		$j("#mail").click(
			function (e) {
 				e.preventDefault();
 				window.location.href = 'mailto:?subject=Article sur proust-traduction.fr : "<?php single_post_title(); ?>"&body=<?php the_permalink(); ?>';
				}
		);
		$j("#fb").click(
			function (e) {
 				e.preventDefault();
				window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>', 'fbwindow', 'height=450, width=550, top='+($j(window).height()/2 - 225) +', left='+$j(window).width()/2 +', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
				}
		);
		$j("#twitter").click(
			function (e) {
 				e.preventDefault();
 				window.open('http://twitter.com/share?text="<?php single_post_title(); ?>"<?php $posttags = get_the_tags();if ($posttags) {foreach($posttags as $tag) {echo urlencode(" #". $tag->name); }} ?> via @b_proust -&url=<?php the_permalink(); ?>', 'twitterwindow', 'height=450, width=550, top='+($j(window).height()/2 - 225) +', left='+$j(window).width()/2 +', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
 			}
		);
	}); 
		</script>
		<header class="entry-header">
			<div class="share">
			<a title = "Partager cet article par courrier" id = "mail" href='#'><img alt="Partager ce contenu par courrier" src="/wp-content/themes/path-proust-traduction/img/share/envelope.png"></a>
			<a title = "Partager cet article sur Facebook" id = "fb" href='#'><img alt="Partager ce contenu sur Facebook" src="/wp-content/themes/path-proust-traduction/img/share/facebook.png"></a>
			<a title = "Partager cet article sur Twitter"id = "twitter" href='#'><img alt="Partager ce contenu sur Twitter" src="/wp-content/themes/path-proust-traduction/img/share/twitter.png"></a>
			<a title="Imprimer cet article" class="print" href="#"><img alt="Imprimer ce contenu" src="/wp-content/themes/path-proust-traduction/img/share/print.png"></a>
			<a href="#"> <?php if (function_exists("wpptopdf_display_icon")) echo wpptopdf_display_icon();?></a>
			</div>
		
			<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>

			<?php echo apply_atomic_shortcode( 'byline', '<div class="byline">' . __( 'Published by [entry-author] on [entry-published] [entry-comments-link before=" | "] [entry-edit-link before=" | "]', 'path' )); ?>
			</div>
		<div class="post-reading-time"><?php post_read_time(); ?></div>
		</header><!-- .entry-header -->
		
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'path' ), 'after' => '</p>' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[entry-terms taxonomy="category" before="Posted in "] [entry-terms before="Tagged "]', 'path' ) . '</div>' ); ?>
		</footer><!-- .entry-footer -->
		
	<?php } else { ?>

		<?php if ( current_theme_supports( 'get-the-image' ) ) get_the_image( array( 'meta_key' => 'Thumbnail', 'size' => 'thumbnail' ) ); ?>
	
		<header class="entry-header">
			<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>
			<?php echo apply_atomic_shortcode( 'byline', '<div class="byline">' . __( 'Published by [entry-author] on [entry-published] [entry-comments-link before=" | "] [entry-edit-link before=" | "]', 'path' ) . '</div>' ); ?>
		</header><!-- .entry-header -->
		
		<div class="entry-summary">
			<?php the_excerpt(); ?>
			<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'path' ), 'after' => '</p>' ) ); ?>
		</div><!-- .entry-summary -->

		<footer class="entry-footer">
			<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[entry-terms taxonomy="category" before="Posted in "] [entry-terms before="| Tagged "]', 'path' ) . '</div>' ); ?>
		</footer><!-- .entry-footer -->
		
	<?php } ?>

	<?php do_atomic( 'close_entry' ); // path_close_entry ?>

</article><!-- .hentry -->

<?php do_atomic( 'after_entry' ); // path_after_entry ?>