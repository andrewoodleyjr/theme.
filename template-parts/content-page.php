<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Woodley
 * @since Woodley 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
