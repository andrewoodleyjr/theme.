<?php get_header() ?>

<main class="currl-main main">
<section class="currl-column currl-image-container"> 
<div class="currl-image currl-insta-none" style="background-image:url('<?php header_image(); ?>')"></div>
</section>

<section class="currl-column currl-text">
<div class="currl-text-wrap">
<div class="currl-text-inner" data-align-h="center" data-align-v="center">
<h1 class="currl-title"><?php bloginfo( 'name' ); ?></h1>

<h2 class="currl-tagline"><?php bloginfo( 'description' ); ?>

</h2>

<?php wp_nav_menu(array(
	'theme_location' => 'primary',
	'menu_class'     => 'flip',
	));
?>


<div class="currl-bio">
	<?php 
		if (have_posts()):
			# code...
			while (have_posts()): the_post();?>
				
				<h1 style="color:#000; font-size: 20px; margin-top:20px"><?php the_title(); ?></h1>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile;
		endif;
	 ?>
</div>
</div>

<?php get_footer(); ?>