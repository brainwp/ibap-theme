<?php 
// Show each article
?>
<article class="col-md-3 each-product">
	<a href="<?php the_permalink();?>" class="col-md-12 product-bg">
		<div class="col-md-12 product-thumb">
			<?php echo odin_thumbnail( 300, 460, get_the_title(), true, 'img-capas' );?>
		</div><!-- .col-md-12 livros-thumb -->
		<div class="col-md-12 product-title">
			<h3><?php the_title();?></h3>
		</div><!-- .col-md-12 article-title -->
		<div class="col-md-12 the-content">
			<?php the_excerpt();?>
		</div><!-- .col-md-12 the-content -->
		<div class="col-md-12 btn-container">
			<button class="btn btn-primary"><?php _e('Comprar','ibap-theme');?></button>
		</div><!-- .col-md-12 btn-container -->
	</a>
</article><!-- .col-md-3 each-article -->
