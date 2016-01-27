<?php
/* Slider eventos */
?>
<section class="home-bg col-md-12">
	<div class="container">
		<div class="col-md-12 noticias-slider-content text-center">
			<h2><?php _e( 'Ultimas Notícias', 'ibap-theme' ); ?></h2>
			<div class="col-md-12 slider-noticias">
				<?php
				// WP_Query arguments
				$args = array (
					'post_type'              => array( 'evento' ),
					'posts_per_page'         => 9,
				);

				// The Query
				$query = new WP_Query( $args );

				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						get_template_part( 'content/slider-eventos' );
					}
				} 
				// Restore original Post Data
				wp_reset_postdata();
				?>
			</div><!-- .col-md-10 col-md-offset-1 slider-noticias -->
		</div><!-- .col-md-12 noticias-slider-content -->
	</div><!-- .container -->
</section><!-- .home-bg col-md-12 -->
