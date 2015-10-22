<?php
/* Biblioteca Footer */
?>
<div class="col-md-12 biblioteca-footer revistas-footer">
	<div class="container">
		<div class="col-md-12 biblioteca-footer-container">
			<h2 class="biblioteca-title">
				<?php _e( 'Revistas', 'ibap-theme' );?>
			</h2><!-- .biblioteca-title -->
			<div class="separator"></div><!-- .separator -->
			<?php $args = array(
				'post_type' => 'product',
				'posts_per_page' => 3,
				'tax_query' => array(
					array(
						'taxonomy' => 'product_cat',
						'field'    => 'slug',
						'terms'    => 'revistas',
					),
				),
			);
			$query = new WP_Query( $args );
			?>
			<?php if ( $query->have_posts() ) : ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php if ( ! has_post_thumbnail() ) continue;?>
					<?php get_template_part( '/content/revistas' );?>
				<?php endwhile;?>
			<?php endif;?>
		</div><!-- .col-md-12 biblioteca-footer-container -->
	</div><!-- .container -->
</div><!-- .col-md-12 biblioteca-footer -->