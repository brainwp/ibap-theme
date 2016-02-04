<?php
// content livros
?>
<article class="col-md-12 each-livros">
	<a href="<?php the_permalink();?>" class="col-md-12 livros-bg">
		<div class="col-md-4 livros-thumb">
			<?php echo odin_thumbnail( 300, 460, get_the_title(), true, 'img-capas' );?>
		</div><!-- .col-md-4 livros-thumb -->
		<div class="col-md-8 pull-right">
			<div class="livros-title">
				<h3><?php the_title();?></h3>
			</div><!-- .livros-title -->
			<div class="col-md-12 the-content">
				<?php echo odin_get_excerpt( get_the_ID(), 140, null, ' [..]' );?>
			</div><!-- .col-md-12 the-content -->
			<div class="col-md-12 btn-container">
				<button class="btn btn-primary"><?php _e('Comprar','ibap-theme');?></button>
			</div><!-- .col-md-12 btn-container -->
		</div><!-- .col-md-12 pull-right -->
	</a>
</article><!-- .col-md-6 each-article -->
