<?php
/* Each slider noticias item */
/* content agenda */
$date = DateTime::createFromFormat( 'Ymd', get_post_meta( get_the_ID(), 'agenda_data', true ) );
?>
<div class="each-slider-noticias">
	<div class="each-slider-padding">
		<a class="slider-thumbnail" href="<?php the_permalink();?>">
			<?php the_post_thumbnail( 'medium' );?>
		</a><!-- .thumbnail -->
		<div class="each-slider-content">
			<a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
				<div class="data-content">
					<span class="col-md-12 dia-mes">
						<?php echo date_i18n( 'd', false );?>
					</span>
					<span class="col-md-12 mes">
						<?php echo date_i18n( 'M', false );?>
					</span>
				</div><!-- .data-content -->
			</div><!-- .col-md-12 slider-author -->
			<div class="slider-text">
				<?php the_excerpt();?>
			</div><!-- .slider-text -->
		</div><!-- .each-slider-content -->	
		<a href="<?php the_permalink();?>" class="btn btn-primary">
			<?php _e( 'Saiba mais >>', 'ibap-theme' );?>
		</a>
	</div><!-- .each-slider-padding -->
</div><!-- .each-slider-noticias -->
