<?php
/**
 * The template for displaying all pages
 *
 * @package richardcodes
 */

get_header();
?>

<main>
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
</main>

<?php get_footer();