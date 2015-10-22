<?php 
// Show each article
?>
<article class="col-md-6 each-article">
	<a href="<?php the_permalink();?>" class="col-md-12 article-bg">
		<div class="col-md-12 article-title">
			<h3><?php the_title();?></h3>
		</div><!-- .col-md-12 article-title -->
		<div class="col-md-12 the-content">
			<?php the_excerpt();?>
		</div><!-- .col-md-12 the-content -->
		<div class="col-md-12 btn-container">
			<button class="btn btn-primary"><?php _e('Leia Mais >>','ibap-theme');?></button>
		</div><!-- .col-md-12 btn-container -->
	</a>
</article><!-- .col-md-6 each-article -->