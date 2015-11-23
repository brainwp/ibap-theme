<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header('matuck'); ?>
	<div class="container ibap-page col-md-12">

<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
?>

	<header class="entry-header col-md-12">
		<div class="container">
		<?php
			the_title( '<h1 class="entry-title">', '</h1>' );
		?>

		<?php if ( 'post' == get_post_type() ) : ?>
			<!-- <div class="entry-meta"> <?php // odin_posted_on(); ?> </div> -->
		<?php endif; ?>
		</div>
	</header><!-- .entry-header -->
	<div class="clear"></div>
<div class="container">
	<main id="content" class="page-content col-md-10">

						<?php
						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					endwhile;
				?>
	</main><!-- #main -->
</div><!-- .container -->
</div><!-- .container -->
<?php
get_footer(); ?>
