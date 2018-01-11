<?php 
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Woodley
 * @since Woodley 1.1
 */

get_header(); ?>

<main class="currl-main main">
<section class="currl-column currl-image-container"> 
<div class="currl-image currl-insta-none" style="background-image:url('<?php header_image(); ?>')"></div>
</section>

<section class="currl-column currl-text">
<div class="currl-text-wrap">
<div class="currl-text-inner" data-align-h="center" data-align-v="center">
<h1 class="currl-title"><?php bloginfo( 'name' ); ?></h1>

<h2 class="currl-tagline">
	<?php bloginfo('description') ?>
</h2>

<?php wp_nav_menu(array(
	'theme_location' => 'primary',
	'menu_class'     => 'flip',
	));
?>


<div class="currl-bio">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// End of the loop.
		endwhile;
		?>

</div>
</div>
</div>

