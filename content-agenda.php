<?php
/* content agenda */
$date = DateTime::createFromFormat( 'Ymd', get_post_meta( get_the_ID(), 'agenda_data', true ) );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'each archive-agenda' ); ?>>

	<div class="row">
		<div class="col-sm-4 col-md-3 data-content">
			<span class="col-md-12 dia-mes">
				<?php echo date_i18n( 'd', false );?>
			</span>
			<span class="col-md-12 mes">
				<?php echo date_i18n( 'M', false );?>
			</span>
		</div><!-- .col-md-3 -->
		<div class="col-sm-8 col-md-4 thumb">
				<?php if ( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail( 'thumb-600-400' ); ?>
				<?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/noticias-default.jpg" alt="<?php the_title(); ?>">
				<?php endif ?>
		</div><!-- thumb -->

		<div class="col-sm-12 col-md-5 desc">
		    <h4 class="the-infos">
		    	<?php echo apply_filters('the_content', get_post_meta( get_the_ID(), 'agenda_local', true));?>
		    </h4><!-- .the-infos -->
		    <h4 class="the-infos">
		    	<?php echo sprintf(__('A partir das %s','odin'), get_post_meta( get_the_ID(), 'agenda_hora', true));?>
		    </h4><!-- .the-infos -->
		    <?php if(!is_single()): ?>
		        <a href="<?php echo get_permalink(); ?>" class="mais"><?php _e( 'Leia mais', 'odin' ); ?></a>
		    <?php endif;?>
		</div><!-- desc -->
	</div>
<div class="row">
		<div class="col-sm-8">
 			<h4 class="the-infos"><?php the_content();?></h4><!-- .the-title -->
		</div>
</article>
