<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Scribbleit
 */

get_header();
?>

	<div class="container">
		<div class="row main-content-row">
			<div class="col-md-8">
				<main id="primary" class="site-main">

					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'scribbleit' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p>Perhaps try returning to the <a href="<?php echo get_home_url();?>">homepage</a> and finding your way from there.</p>
						</div><!-- .page-content -->
					</section><!-- .error-404 -->

				</main><!-- #main -->
			</div><!--#col-md-8 -->

<?php
get_sidebar();
get_footer();

