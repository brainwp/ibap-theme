<?php 
// Show each article
?>
<article class="col-md-4 each-revista">
	<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );?>
	<a href="<?php the_permalink();?>" class="col-md-12 revista-bg" style="background-image:url(<?php echo $url[0];?>);">
		<div class="article-toggle">
			<div class="col-md-12 article-title">
				<h3><?php the_title();?></h3>
			</div><!-- .col-md-12 article-title -->
			<div class="col-md-12 the-content">
				<?php the_excerpt();?>
			</div><!-- .col-[md-12 the-content -->
		</div><!-- .article-toggle -->
	</a>
</article><!-- .col-md-6 each-article -->