<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */


get_header();
?>

<?php if ( have_posts() ) : $first_excluded_post_id = ''; ?>
<?php $excluded_ids_for_gallery = array();?>
<?php $second_excluded_ids_for_gallery = array();?>

	<section class="mini-header-section">
		<div class="container-fluid clearfix" style="padding: 0px; background: #000">
			<div class="container clearfix">

				<div class="custom-post-mini-header">
					<div class="mini-header-cat-indicator">Blog > 
						<?php 

							if ( has_category()) {
								/* translators: used between list items, there is a space after the comma. */
								$categories_list = get_the_category_list( __( ', ', 'twentytwentyone' ) );
								if ( $categories_list ) {
									printf(
										/* translators: %s: list of categories. */
										'<span class="cat-links">' . esc_html__( '%s', 'twentytwentyone' ) . ' </span>',
										$categories_list // phpcs:ignore WordPress.Security.EscapeOutput
									);
								}
							}

						?>
					</div>

					<div class="mini-header-subscribe-div">
						<a href="#"><span class="span-explore" style="color: #ffce39">EXPLORE DESTINATIONS</span></a> <a href="#"><span class="span-subscribe" style="color: #fff"> | SUBSCRIBE <i class="icon-email"></i></span></a>
					</div>
				</div>

			</div>
		</div>
	</section>


	<section id="slider" class="slider-element boxed-slider" style="padding-top: 0">
		<div class="container-fluid clearfix" style="padding: 0px;">

			<div class="vertical-social-links-holder">
				<a href="#" class="social-icon si-colored si-facebook" title="Facebook">
					<i class="icon-facebook"></i>
					<i class="icon-facebook"></i>
				</a>
				<a href="#" class="social-icon si-colored si-twitter" title="Twitter">
					<i class="icon-twitter"></i>
					<i class="icon-twitter"></i>
				</a>
				<a href="#" class="social-icon si-colored si-instagram" title="Instagram">
					<i class="icon-instagram"></i>
					<i class="icon-instagram"></i>
				</a>
			</div>

			<figure class="post-thumbnail">
				<a class="post-thumbnail-inner alignwide" href="javascript:void(0)" aria-hidden="true" tabindex="-1">
					<img  src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/category-cover.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" style="width:100%;height:31.04%;max-width:1920px;">				
				</a>
			</figure>


	<?php while ( have_posts() ) : ?>

		<?php $first_excluded_post_id = get_the_id(); ?>

			<div class="cover-caption-holder">
				<div class="container">
				<div class="row">

					<div class="col-md-7">
						<h4 class="custom-category-featured">FEATURED</h4>

						<?php if ( is_singular() ) : ?>
							<?php the_title( '<h1 class="entry-title default-max-width custom-category-title">', '</h1>' ); ?>
						<?php else : ?>
							<?php the_title( sprintf( '<h2 class="entry-title default-max-width  custom-category-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						<?php endif; ?>

						<h4 class="custom-category-fourmin">4 Min Read</h4>
						<p class="custom-category-exerpt">
							<?php echo get_the_excerpt(); ?>
						</p> 

						<a href="<?php the_permalink(); ?>"class="more-link">READ MORE</a>

					</div>



		<?php break; 

	 	endwhile; ?>

				<div class="col-md-2"></div>
				<div class="col-md-3">
					<?php cats_related_post_for_archive('3', array($first_excluded_post_id))?>
				</div>
			</div>
		</div>
	</div>

		</div>
	</section>

	<section id="custom-related-post-section">

		<div class="content-wrap">

			<div class="container clearfix">
				<div id="posts" class="post-grid grid-container grid-3 clearfix" data-layout="fitRows">
					<?php post_cats_related_post('6') ?>
				</div>
			</div>

		</div>

	</section><!-- #content end -->

<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php get_footer(); ?>

