<?php
/* Each slider noticias item */
?>
<div class="each-slider-noticias">
	<div class="each-slider-padding">
		<a class="slider-thumbnail" href="<?php the_permalink();?>">
			<?php the_post_thumbnail( 'medium' );?>
		</a><!-- .thumbnail -->
		<div class="each-slider-content">
			<a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
			<div class="slider-author">
				<?php printf( __( 'criado por %s', 'ibap-theme'), get_the_author() );?>
			</div><!-- .col-md-12 slider-author -->
			<div class="slider-text">
				<?php the_excerpt();?>
			</div><!-- .slider-text -->
		</div><!-- .each-slider-content -->	
		<a href="<?php the_permalink();?>" class="btn btn-primary">
			<?php _e( 'leia mais >>', 'ibap-theme' );?>
		</a>
	</div><!-- .each-slider-padding -->
</div><!-- .each-slider-noticias -->
