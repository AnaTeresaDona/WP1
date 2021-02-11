<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Scribbleit
 */

get_header();
?>

	<div class="container">
		<div class="row main-content-row">
			<div class="col-md-8">
				<main id="primary" class="site-main">

					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						the_post_navigation(
							array(

								'prev_text'  => __( '<i class="fa fa-angle-left"> </i>Previous post', 'intandem' ),
            					'next_text'  => __( 'Next post <i class="fa fa-angle-right"> </i>', 'intandem' )

							)
						);

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!--#col-md-8-->

<?php
get_sidebar();
get_footer();
