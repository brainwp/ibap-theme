<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'matuck' ); ?>
<div class="col-md-12 woocommerce-title">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php the_title();?></h1>
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .col-md-12 woocommerce-title -->
<div class="ibap-single col-md-12">

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

	<header class="entry-header col-md-12">
	<div class="container">



	</div>
	</header><!-- .entry-header -->



	<div class="clear"></div>
<div class="container">
	<div class="container">
			<main id="main-content" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>


			</main><!-- #main -->
	</div><!-- .container -->

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

</div>
</div>
<?php get_template_part( '/parts/revistas-footer' );?>
<?php
get_footer(); ?>
