<?php 
// Show each article
?>
<article class="col-md-3 each-revista-single">
	<a href="<?php the_permalink();?>" class="col-md-12">
		<?php echo odin_thumbnail( 300, 460, get_the_title(), true, 'img-capas' );?>
		<h3 class="the-title product-title">
			<?php the_title();?>
		</h3><!-- .the-title -->
	</a>
</article><!-- .col-md-6 each-article -->
