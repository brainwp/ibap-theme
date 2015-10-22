<?php
/**
 * Template Name: Biblioteca
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(	'matuck' );
?>
<div class="ibap-slider-home col-md-12" id="biblioteca-header">
	<div class="container">
		<?php
			// Start the Loop.
		while ( have_posts() ) : the_post(); ?>
			<?php if ( has_post_thumbnail() ) : ?>
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );?>
				<div class="col-md-12 header-page-image" style="background-image:url(<?php echo esc_attr( $url );?>);">
					<h1 class="page-title"><?php the_title();?></h1><!-- .page-title -->
					<div class="col-md-8 col-md-offset-2 the-content">
						<?php the_content();?>
						<a href="#" class="col-md-12 scroll-content" title="<?php _e( 'Ver a biblioteca', 'ibap-theme');?>"></a>
					</div><!-- .col-md-10 col-md-offset-1 the-content -->
				</div><!-- .col-md-12 header-page-image -->
			<?php endif;?>
		<?php endwhile; ?>
	</div><!-- .container -->
</div><!-- .ibap-slider-home col-md-12 -->
<div class="col-md-12 biblioteca-query home-bg">
	<div class="container">
		<section class="col-md-6 artigos">
			<h2 class="section-name"><?php _e( 'Nossos Artigos', 'ibap-theme' );?></h2><!-- .section-name -->
			<?php $args = array(
				'post_type' => 'product',
				'posts_per_page' => 6,
				'tax_query' => array(
					array(
						'taxonomy' => 'product_cat',
						'field'    => 'slug',
						'terms'    => 'artigos',
					),
				),
			);
			$query = new WP_Query( $args );
			?>
			<?php if ( $query->have_posts() ) : ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php get_template_part( '/content/article' );?>
				<?php endwhile;?>
			<?php endif;?>
			<div class="col-md-12 text-center btn-more-container">
				<a class="btn-primary btn-large btn-more" href="<?php echo get_post_type_archive_link( 'artigos' );?>">
					<?php _e( 'Todos Artigos', 'ibap-theme');?>
				</a>
			</div><!-- .col-md-12 text-center -->
		</section><!-- .col-md-6 artigos -->
		<section class="col-md-6 livros pull-right">
			<h2 class="section-name"><?php _e( 'Livros a Venda', 'ibap-theme' );?></h2><!-- .section-name -->
			<?php $args = array(
				'post_type' => 'product',
				'posts_per_page' => 6,
				'tax_query' => array(
					array(
						'taxonomy' => 'product_cat',
						'field'    => 'slug',
						'terms'    => 'livros',
					),
				),
			);
			$query = new WP_Query( $args );
			?>
			<?php if ( $query->have_posts() ) : ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php get_template_part( '/content/livros' );?>
				<?php endwhile;?>
			<?php endif;?>
			<div class="col-md-12 text-center btn-more-container">
				<a class="btn-primary btn-large btn-more" href="<?php echo get_term_link( 'livros', 'product_cat' );?>">
					<?php _e( 'Todos Livros', 'ibap-theme');?>
				</a>
			</div><!-- .col-md-12 text-center -->
		</section><!-- .col-md-6 livros -->
	</div><!-- .container -->
</div><!-- .col-md-12 biblioteca-query -->
<?php get_template_part( '/parts/revistas-footer' );?>
<?php
get_footer();
