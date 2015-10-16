<?php
/* About Section */
?>
<div class="home-separator"></div><!-- .home-separator -->
<section class="about col-md-12">
	<div class="container">
		<div class="col-md-12 text-center">
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post(); ?>
				<h2 class="about-title">
					<?php $title = ( get_post_meta( get_the_ID(), 'home_about', true ) ? get_post_meta( get_the_ID(), 'home_about', true ) : __( 'Sobre', 'ibap-theme' ) ); ?>
					<?php echo apply_filters( 'the_title', $title );?>
				</h2><!-- .about-title -->
				<div class="col-md-12 about-content">
					<?php the_content();?>
				</div><!-- .col-md-12 about-content -->
				<div class="col-md-12 about-btn-container text-center">
					<?php if( get_post_meta( get_the_ID(), 'home_left_btn', true ) &&  $link = get_post_meta( get_the_ID(), 'home_left_btn_link', true ) ) : ?>
						<?php $title = get_post_meta( get_the_ID(), 'home_left_btn', true ); ?>
						<a href="<?php echo esc_url( $link );?>" class="btn btn-primary btn-large">
							<?php echo apply_filters( 'the_title', $title );?>
						</a>
					<?php endif;?>
					<?php if( get_post_meta( get_the_ID(), 'home_right_btn', true ) &&  $link = get_post_meta( get_the_ID(), 'home_right_btn_link', true ) ) : ?>
						<?php $title = get_post_meta( get_the_ID(), 'home_right_btn', true ); ?>
						<a href="<?php echo esc_url( $link );?>" class="btn btn-primary btn-large">
							<?php echo apply_filters( 'the_title', $title );?>
						</a>
					<?php endif;?>
				</div><!-- .col-md-10 col-md-offset-1 about-btn-container -->
			<?php endwhile; ?>
		</div><!-- .col-md-12 text-center -->
	</div><!-- .container -->
</section><!-- .about col-md-12 -->