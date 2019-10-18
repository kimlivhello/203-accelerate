<?php
/*
Template Name: About
*/

/* The template for displaying the About Page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
*/

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #about page -->
	
<div id="about-page">

	<section class="about-services">
        <div class="site-content">
			<h4>Our Services</h4>
			<p>We take pride in our clients and the content we create for them.</p>
			<p>Here's a brief overview of our offered services</p>
		</div>


		<div class="services">
			<?php query_posts('post_type=services'); ?>
				<?php while ( have_posts() ) : the_post(); 
					$service_image = get_field('service_image');
					$size = "medium"; 
				?>
					<div class="services-item">
						<div class="services-content">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
						</div>
						<div class="services-image">
							<?php echo wp_get_attachment_image($service_image, $size); ?>
						</div>
					</div>
				<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div>

	</section>

	<section class="about-contact">
		<div class="about-contact-container">
			<h3>Interested in working with us?</h3>
			<a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
		</div>
	</section>

</div>

<?php get_footer(); ?>