
			<footer id="site-footer" role="contentinfo" class="header-footer-group">
				<div id="contact" class="container">
					<h3>Me joindre</h3>
				  <form onsubmit="sendContactForm(event)">
						<div class='form-wrapper'>
							<div class="flex-row">
								<div class="input-wrapper">
									<div class="label-wrapper">
										<label for="fname">Prénom</label>
									</div>
						    	<input type="text" id="fname" name="firstname" placeholder="Prénom" required>
								</div>
								<div class="input-wrapper">
									<div class="label-wrapper">
										<label for="lname">Nom</label>
									</div>
						    	<input type="text" id="lname" name="lastname" placeholder="Nom" required>
								</div>
							</div>
							<div class="flex-row">
								<div class="input-wrapper">
									<div class="label-wrapper">
										<label for="email">Courriel</label>
									</div>
									<input type="text" id="email" name="email" placeholder="Courriel" required>
								</div>
								<div class="input-wrapper">
									<div class="label-wrapper">
										<label for="phone">Téléphone</label>
									</div>
									<input type="text" id="phone" name="phone" placeholder="Téléphone">
								</div>
							</div>
							<div class="flex-row">
								<div class="input-wrapper">
									<div class="label-wrapper">
										<label for="activity">Secteur d'activité</label>
									</div>
									<input type="text" id="activity" name="activity" placeholder="Secteur d'activité">
								</div>
							</div>
							<div class="flex-row">
								<div class="input-wrapper">
						    	<textarea id="subject" name="subject" placeholder="Que puis-je faire pour vous?" style="height:200px"></textarea>
								</div>
							</div>
							<div class="flex-row">
								<div class="input-wrapper">
						    	<input type="submit" class="right" value="Submit">
								</div>
							</div>
						</div>
				  </form>
				</div>

				<div class="section-inner">

					<div class="footer-credits">

						<p class="footer-copyright">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://secure.php.net/date */
								_x( 'Y', 'copyright date format', 'twentytwenty' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->

						<p class="powered-by-wordpress">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentytwenty' ) ); ?>">
								<?php _e( 'Powered by WordPress', 'twentytwenty' ); ?>
							</a>
						</p><!-- .powered-by-wordpress -->

					</div><!-- .footer-credits -->

					<a class="to-the-top" href="#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow */
							printf( __( 'To the top %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-long -->
						<span class="to-the-top-short">
							<?php
							/* translators: %s: HTML character for up arrow */
							printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>
	</div>
	</body>
</html>
