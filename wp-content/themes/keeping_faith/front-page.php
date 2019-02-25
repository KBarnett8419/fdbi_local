<?php /* Template Name: Front Page */ ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Keeping_Faith
 */

get_header();
?>

<div class="front-pg-hero-block">
			<?php if( get_field('hero_image') ): ?>

				<img class="front-pg-hero-img" src="<?php the_field('hero_image'); ?>" />

			<?php endif; ?>
</div>

<div class="all-course-block">
			<?php if( get_field('course-block1') ): ?>

				<img class="course-img" src="<?php the_field('course-block1'); ?>" />

			<?php endif; ?>

			<?php if( get_field('course-block2') ): ?>

				<img class="course-img" src="<?php the_field('course-block2'); ?>" />

			<?php endif; ?>

			<?php if( get_field('course-block3') ): ?>

				<img class="course-img" src="<?php the_field('course-block3'); ?>" />

			<?php endif; ?>

			<?php if( get_field('course-block4') ): ?>

				<img class="course-img" src="<?php the_field('course-block4'); ?>" />

			<?php endif; ?>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
