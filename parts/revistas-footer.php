<?php
/* Biblioteca Footer */
$cat = 'revistas';
$show = 3;
if ( is_woocommerce() && is_singular() ) {
	$cat = get_woocommerce_cat_query();
	$show = 4;
} 
?>
<div class="col-md-12 biblioteca-footer revistas-footer">
	<div class="container">
		<div class="col-md-12 biblioteca-footer-container">
			<h2 class="biblioteca-title">
				<?php if ( is_woocommerce() && is_singular() ) : ?>
					<?php if ( $cat == 'livros' ) : ?>
						<?php _e( 'Livros Relacionados', 'ibap-theme' ); ?>
					<?php else : ?>
						<?php _e( 'Revistas Relacionadas', 'ibap-theme' ); ?>
					<?php endif;?>
				<?php else : ?>
					<?php _e( 'Revistas', 'ibap-theme' );?>
				<?php endif;?>
			</h2><!-- .biblioteca-title -->
			<div class="separator"></div><!-- .separator -->
			<?php $args = array(
				'post_type' => 'product',
				'posts_per_page' => $show,
				'tax_query' => array(
					array(
						'taxonomy' => 'product_cat',
						'field'    => 'slug',
						'terms'    => $cat,
					),
				),
			);
			$query = new WP_Query( $args );
			?>
			<?php if ( $query->have_posts() ) : ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php if ( ! has_post_thumbnail() ) continue;?>
					<?php if ( is_singular( 'product' ) ) : ?>
						<?php get_template_part( '/content/revistas-single' );?>
					<?php else : ?>
						<?php get_template_part( '/content/revistas' );?>
					<?php endif;?>
				<?php endwhile;?>
			<?php endif;?>
		</div><!-- .col-md-12 biblioteca-footer-container -->
	</div><!-- .container -->
</div><!-- .col-md-12 biblioteca-footer -->