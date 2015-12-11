<?php 
// Show each article
?>
<article class="col-md-3 each-revista-single">
	<a href="<?php the_permalink();?>" class="col-md-12">
		<?php the_post_thumbnail( 'large' );?>
		<h4 class="the-title">
			<?php the_title();?>
		</h4><!-- .the-title -->
	</a>
</article><!-- .col-md-6 each-article -->