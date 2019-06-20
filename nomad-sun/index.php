<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nomad_Sun
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<!-- here we include our hero component file  -->
		<?php 
			$query = new WP_Query('posts_per_page=1&orderby=rand');
			if ($query->have_posts()): while ($query->have_posts()): 
			$query->the_post();
			$hero_post = get_the_ID();
			get_template_part( 'template-parts/content-hero');
			endwhile; endif;

		?>
		<?php get_template_part ('template-parts/content-about');?>

		<?php get_template_part ('template-parts/content-navigate');?>

		<?php get_template_part ('template-parts/content-bio');?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
