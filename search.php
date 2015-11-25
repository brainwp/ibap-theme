<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header('matuck'); ?>
<div class="ibap-single col-md-12">

				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
?>

	<header class="entry-header col-md-12">
<div class="container">
		<?php
				the_title( '<h1 class="entry-title">', '</h1>' );
			
		?>
	</div>
	</header><!-- .entry-header -->

				<?php endwhile;	?>

	<div class="clear"></div>

	<div class="clear"></div>
<div class="container">
	<div class="container col-md-9">
			<main id="main-content" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'odin' ), get_search_query() ); ?></h1>
				</header><!-- .page-header -->

					<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();

							/*
							 * Include the post format-specific template for the content. If you want to
							 * use this in a child theme, then include a file called called content-___.php
							 * (where ___ is the post format) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );

						endwhile;

						// Post navigation.
						odin_paging_nav();

					else :
						// If no content, include the "No posts found" template.
						get_template_part( 'content', 'none' );

					endif;
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
get_footer('');
