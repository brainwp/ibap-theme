<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header( 'matuck' ); ?>
<div class="ibap-single col-md-12">

				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
?>

	<header class="entry-header col-md-12">
<div class="container">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
		?>

		<?php if ( 'post' == get_post_type() ) : ?>
			<!-- <div class="entry-meta"> <?php // odin_posted_on(); ?> </div> -->
		<?php endif; ?>
	</div>
	</header><!-- .entry-header -->

	<div class="clear"></div>
<div class="container">
	<div class="container col-md-9">
			<main id="main-content" class="site-main" role="main">

						<?php
						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					endwhile;
				?>
			</main><!-- #main -->
	</div><!-- .container -->
	<div class="col-md-3 pull-right">
	<?php
	get_sidebar(); ?>
	</div>
</div>
</div>
<?php
get_footer(); ?>
