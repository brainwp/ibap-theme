<?php
/**
 * Template Name: Bandeiras
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(	'matuck' );
?>
<?php $args = array(
	'post_type' => 'page',
	'post_parent' => get_the_ID(),
);
$query = new WP_Query( $args );
?>
<?php if ( $query->have_posts() ) : ?>
	<?php $i = 1;?>
	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
		<?php if ( ! has_post_thumbnail() ) continue;?>
		<?php $class = '';?>
		<?php if ( $i == 2 ) : ?> 
			<?php $class = 'bg-bege';?>
			<?php $i = 0;?>
		<?php endif;?>
		<div class="ibap-slider-home col-md-12 biblioteca-header <?php echo $class;?>" id="bandeira-<?php echo get_the_ID();?>">
			<div class="container">
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );?>
				<div class="col-md-12 header-page-image" style="background-image:url(<?php echo esc_attr( $url );?>);">
					<h1 class="page-title"><?php the_title();?></h1><!-- .page-title -->
					<div class="col-md-8 col-md-offset-2 the-content">
						<?php the_content();?>
						<a href="#" class="col-md-12 scroll-content scroll-next" title="<?php _e( 'Ver a próxima bandeira', 'ibap-theme');?>" data-id="#bandeira-<?php echo get_the_ID();?>"></a>
					</div><!-- .col-md-10 col-md-offset-1 the-content -->
				</div><!-- .col-md-12 header-page-image -->
			</div><!-- .container -->
		</div><!-- .ibap-slider-home col-md-12 -->
		<?php $i++;?>
	<?php endwhile;?>
<?php endif;?>

<?php
get_footer();
