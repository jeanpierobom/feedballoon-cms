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
 * @package FeedBalloon_Theme
 */

get_header();
get_template_part( 'template-parts/section-header', '' );

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
					get_template_part( 'template-parts/section-feedbacks', '' );
					get_template_part( 'template-parts/section-top', '' );
					get_template_part( 'template-parts/section-screenshots', '' );
					get_template_part( 'template-parts/section-user-reviews', '' );4
				?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
//get_footer();
get_template_part( 'template-parts/section-footer', '' );
