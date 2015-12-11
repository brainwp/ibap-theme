<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
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
					the_archive_title( '<h1 class="entry-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?></div>
		</header><!-- .entry-header -->
		<div class="clear"></div>
	<div class="container">
		<main id="content" class="noticias-slider-content col-md-12">
			<div class="col-md-12 slider-noticias">
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
			</div>
		</main><!-- #main -->
	</div><!-- .container -->
</div><!-- .container -->
<?php
get_footer(); ?>
