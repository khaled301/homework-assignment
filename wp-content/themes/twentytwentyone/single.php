<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

get_header();


while ( have_posts() ) : 
	the_post();

?>

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

			<?php twenty_twenty_one_post_thumbnail(); ?>

			<div class="slider-caption custom-post-slider-caption">
				<div class="custom-title-category-tag">
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
				<h2 data-animate="fadeInUp" style="overflow: visible;"><?php the_title();?></h2>
				<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200" style="font-weight: 600; color: #fff; font-size: 16px; margin-top: 5px;">Source Name | 4 Min Read</p>
			</div>
		</div>
	</section>



		<section id="custom-content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin clearfix">

						<div class="single-post nobottommargin">

							<div class="entry clearfix custom-single-post-entry">

								<div class="entry-content notopmargin custom-post-entry-content">

									<?php the_content(); ?>

									<br>

									<?php 
										if ( has_tag() ) {

											echo '<div class="post-taxonomies">';
											/* translators: used between list items, there is a space after the comma. */
											$tags_list = get_the_tag_list( '', __( ', ', 'twentytwentyone' ) );
											if ( $tags_list ) {
												printf(
													/* translators: %s: list of tags. */
													'<span class="tag-links-label">Tags: </span><span class="tags-links">' . esc_html__( ' %s', 'twentytwentyone' ) . '</span>',
													$tags_list // phpcs:ignore WordPress.Security.EscapeOutput
												);
											}
											echo '</div>';
										}
									?>

									<br>

									<div class="upvote-downvote">
										<span>Was this Article Helpful?</span>
										<i class="icon-thumbs-up"></i>
										<i class="icon-thumbs-down"></i>
									</div>

								</div>
							</div>

						</div>

					</div>


					<div class="sidebar nobottommargin col_last clearfix">
						<div class="sidebar-widgets-wrap custom-post-sidebar-widgets-wrap">

							<div class="widget clearfix">

								<section class="custom-sidebar-next-article">

									<div class="content-wrap">

										<div class="container clearfix">
											<h4>Next Article:</h4>
											<hr class="related-post-horizontal-line">
										</div>

										<div class="container clearfix">
											<div id="posts" class="col_full clearfix" data-layout="fitRows">
												<?php example_cats_related_post('1') ?>
											</div>
										</div>

									</div>

								</section>

							</div>


							<div class="widget subscribe-widget clearfix custom-sidebar-subscribe-widget">
								<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="nobottommargin">

									<h5 class="sidebar-subscribe-text">Subscribe to Our Newsletter for the latest update</h5>

									<div class="input-group divcenter custom-divcenter">
										<!-- <div class="input-group-prepend">
											<div class="input-group-text"><i class="icon-email2"></i></div>
										</div> -->
										<input style="border-color: #ffcf39;" type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
										<div class="input-group-append">
											<button class="btn btn-success custom-button-subscribe-sidebar" type="submit">
												<i >
													<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/yellow-email-icon.jpg" alt="email-icon">
												</i>
											</button>
										</div>
									</div>
								</form>
							</div>

						</div>

					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->


		<section id="custom-related-post-section">

			<div class="content-wrap">

				<div class="container clearfix">
					<h4>Related Articles:</h4>
					<hr class="related-post-horizontal-line">
				</div>

				<div class="container clearfix">
					<div id="posts" class="post-grid grid-container grid-3 clearfix" data-layout="fitRows">
						<?php example_cats_related_post('3') ?>
					</div>
				</div>

			</div>

		</section><!-- #content end -->


<?php

endwhile; // End of the loop.

get_footer();
