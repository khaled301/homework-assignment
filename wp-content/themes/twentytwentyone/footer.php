<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

?>
		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark" style="background: #000;">

			<div class="container" style="background-color: #000 !important">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_half col_last">

						<div class="widget subscribe-widget clearfix">
							<h5 class="footer-subscribe-text" style="font-size: 21px;">Subscribe to Our Newsletter for <br class="custom-footer-break"> latest update</h5>
							<div class="widget-subscribe-form-result"></div>
						</div>

					</div>

					<div class="col_half col_last">

						<div class="widget subscribe-widget clearfix">
							<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<!-- <div class="input-group-prepend">
										<div class="input-group-text"><i class="icon-email2"></i></div>
									</div> -->
									<input style="border-color: #ffcf39;" type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<div class="input-group-append">
										<button class="btn btn-success custom-button-subscribe" type="submit">
											<i >
												<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/email-icon.jpg" alt="email-icon">
											</i>
										</button>
									</div>
								</div>
							</form>
						</div>

					</div>

				</div>

			</div>

			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half" style="line-height: 33px; font-weight: 600;">
						Copyrights &copy; Text goes here.
					</div>

					<div class="col_half col_last tright custom-footer-col" style="line-height: 33px; font-weight: 600;">
						Follow us
						<div class="fright clearfix">

							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-instagram">
								<i class="icon-instagram"></i>
								<i class="icon-instagram"></i>
							</a>

						</div>

						<div class="clear"></div>

					</div>

				</div>

			</div>

		</footer>


</div>


<div id="gotoTop" class="icon-angle-up"></div>


<?php wp_footer(); ?>


</body>
</html>

