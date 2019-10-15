<?php
/**
 * The template for displaying case studies
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
            <?php while ( have_posts() ) : the_post(); 
                $service_title = get_field("service_title");
                $service_image = get_field("service_image");
                $size = "thumbnail";
            ?>

            <article class="services-list">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <?php echo wp_get_attachment_image($service_image, $size); ?>
            </article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
