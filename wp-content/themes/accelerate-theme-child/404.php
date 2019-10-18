<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
            <div class="pic-404">
                <img src="http://accelerate2032.wpengine.com/wp-content/uploads/2019/10/lost-noun-teal.png" />
            </div>
            <div class="whoops">
                <h1>Whoops, Took a Wrong Turn...</h1>
                <p>Sorry, this page no longer exists, never existed, or has been moved.
                    We feel like complete jerks for totally misleading you.</p>
                <p>Feel free to take a look around our 
                <a href="<?php echo site_url('/blog/') ?>">blog</a> or some of our featured
                <a href="<?php echo site_url('/case-studies/') ?>">work</a>.</p>
            </div>
            <p class="credit">Icon made by <a href="https://www.flaticon.com/authors/freepik">Freepik</a> from www.flaticon.com</p>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>