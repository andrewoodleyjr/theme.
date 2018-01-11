<?php 
	/*
		Template Name: List Posts
	 */

	get_header() 
?>


<main class="currl-main main">
<section class="currl-column currl-image-container"> 
<div class="currl-image currl-insta-none" style="background-image:url('<?php header_image(); ?>')"></div>
</section>

<section class="currl-column currl-text">
<div class="currl-text-wrap">
<div class="currl-text-inner" data-align-h="center" data-align-v="center">
<h1 class="currl-title"><?php bloginfo( 'name' ); ?></h1>

<h2 class="currl-tagline">
	<?php bloginfo('description'); ?>
</h2>

<?php wp_nav_menu(array(
	'theme_location' => 'primary',
	'menu_class'     => 'flip',
	));
?>


<div class="currl-bio">
	<?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 
<ul style="list-style: none; padding: 0;">
 
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
</ul>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no blog posts right now.' ); ?></p>
<?php endif; ?>
</div>





</div>





<?php get_footer(); ?>