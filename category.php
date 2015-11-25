<?php
/**
 * The template for displaying Category pages.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header('matuck'); ?>
	<div class="container ibap-category col-md-12">
	



			<?php if ( have_posts() ) : ?>

		<header class="entry-header col-md-12">
			<div class="container">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?></div>
		</header><!-- .entry-header -->
		<div class="clear"></div>
	<div class="container">
		<main id="content" class="page-content col-md-12">
				<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content/slider-noticias' );

						endwhile;

						// Page navigation.
						odin_paging_nav();

					else :
						// If no content, include the "No posts found" template.
						get_template_part( 'content', 'none' );

				endif;
				?>
		</main><!-- #main -->
	</div><!-- .container -->
</div><!-- .container -->
<?php
get_footer(); ?>
