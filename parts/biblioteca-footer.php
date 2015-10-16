<?php
/* Biblioteca Footer */
?>
<div class="col-md-12 biblioteca-footer">
	<div class="container">
		<div class="col-md-12 biblioteca-footer-container">
			<h2 class="biblioteca-title">
				<?php $title = ( kirki_get_option( 'biblioteca_footer_title' ) ? kirki_get_option( 'biblioteca_footer_title' ) : __( 'Nossa Biblioteca', 'ibap-theme' ) ); ?>
				<?php echo $title;?>
			</h2><!-- .biblioteca-title -->
			<div class="separator"></div><!-- .separator -->
			<div class="col-md-6 pull-left biblioteca-description">
				<?php if ( $description = kirki_get_option( 'biblioteca_footer_description' ) ) : ?>
					<?php echo apply_filters( 'the_content', $description );?>
				<?php endif;?>
			</div><!-- .col-md-6 pull-left biblioteca-description -->
			<div class="col-md-6 pull-right biblioteca-links">
				<?php if( $title = kirki_get_option( 'biblioteca_footer_title_1' ) ) : ?>
					<?php $img = kirki_get_option( 'biblioteca_footer_title_img_1' ); ?>
					<div class="col-md-12 biblioteca-each-link">
						<div class="col-md-2 icon-img">
							<img src="<?php echo esc_url( $img );?>" alt="<?php echo esc_attr( $title );?>" />
						</div><!-- .col-md-4 icon-img -->
					</div><!-- .col-md-12 biblioteca-each-link -->
				<?php endif;?>
			</div><!-- .col-md-6 pull-right biblioteca-links -->
		</div><!-- .col-md-12 biblioteca-footer-container -->
	</div><!-- .container -->
</div><!-- .col-md-12 biblioteca-footer -->