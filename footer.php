		<footer class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="footer-menu col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			</div>
			<div class="footer-top col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="footer-top-left col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
					<?php 
						$address_line_1 = get_option('dohko_address_line_1');
						$address_line_2 = get_option('dohko_address_line_2');
						$address_line_3 = get_option('dohko_address_line_3');
				
					if($address_line_1): ?> 
						<div class='footer-address group'>
							<div class='footer-icon'>
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class='footer-content'>
								<?php if($address_line_1): ?><p><?php print $address_line_1; ?></p><?php endif; ?>
								<?php if($address_line_2): ?><p><?php print $address_line_2; ?></p><?php endif; ?>
								<?php if($address_line_3): ?><p><?php print $address_line_3; ?></p><?php endif; ?>
							</div>
						</div>
					<?php endif; ?>
				</div>
				<div class="footer-top-left-center col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
					<?php 
						$working_days_1 = get_option('dohko_working_days_1');
						$working_days_2 = get_option('dohko_working_days_2');
						$working_days_3 = get_option('dohko_working_days_3');
						$working_hours_1 = get_option('dohko_working_hours_1');
						$working_hours_2 = get_option('dohko_working_hours_2');
						$working_hours_3 = get_option('dohko_working_hours_3');

						if($working_days_1): ?> 
							<div class='footer-working_days group'>
								<div class='footer-icon'>
									<i class="fa fa-clock-o" aria-hidden="true"></i>
								</div>
								<div class='footer-content'>
									<p class="padding-abajo">Horario de Atención</p>
									<?php if($working_days_1): ?><p><?php print $working_days_1; ?></p><?php endif; ?>
									<?php if($working_hours_1): ?><p class="padding-abajo"><?php print $working_hours_1; ?></p><?php endif; ?>
									<?php if($working_days_2): ?><p><?php print $working_days_2; ?></p><?php endif; ?>
									<?php if($working_hours_2): ?><p class="padding-abajo"><?php print $working_hours_2; ?></p><?php endif; ?>
									<?php if($working_days_3): ?><p><?php print $working_days_3; ?></p><?php endif; ?>
									<?php if($working_hours_3): ?><p><?php print $working_hours_3; ?></p><?php endif; ?>
								</div>
							</div>
					<?php endif; ?>
				</div>
				<div class="footer-top-right-center col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
					<?php 
						$telephone = get_option('dohko_telephone');
						$mobile = get_option('dohko_mobile');
						$whatsapp = get_option('dohko_whatsapp');
						$email = get_option('dohko_email');
					
						if($telephone ): ?> 
							<div class="footer-phone group">
								<div class='footer-icon'>
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class='footer-content'>
									<p><a href="tel:<?php print $telephone; ?>"><?php print $telephone; ?></a></p>
								</div>
							</div>
						<?php
						endif;
						if($mobile): ?> 
							<div class="footer-mobile group">
								<div class='footer-icon'>
									<i class="fa fa-mobile" aria-hidden="true"></i>
								</div>
								<div class='footer-content'>
									<p><a href="tel:<?php print $mobile; ?>"><?php print $mobile; ?></a></p>
								</div>
							</div>
						<?php 
							endif;
							if($whatsapp): ?> 
								<div class="footer-whatsapp group">
									<div class='footer-icon'>
										<i class="fa fa-whatsapp" aria-hidden="true"></i>
									</div>
									<div class='footer-content'>
										<p><a href="tel:<?php print $whatsapp; ?>"><?php print $whatsapp; ?></a></p>
									</div>
								</div>
						<?php endif; ?>
						<?php if($email): ?> 
							<div class="footer-email group">
								<div class='footer-icon'>
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class='footer-content'>
									<p><a href='<?php print $email; ?>'><?php print $email; ?></a></p>
								</div>
							</div>
						<?php endif; 	?>
				</div>
				<div class="footer-top-right col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
					<div class="footer-logo">
						<img id="footer-logo" src="<?php echo get_template_directory_uri().'/images/dohko logo inv.png'; ?>">
						<?php
							$facebook = get_option('dohko_facebook');
							$youtube = get_option('dohko_youtube');
							$instagram = get_option('dohko_instagram');
							$googleplus = get_option('dohko_googleplus');
							$twitter = get_option('dohko_twitter');
						?>
					</div>
					<div class='footer-social'>
						<?php if($facebook): ?><a href="<?php print $facebook; ?>" target="_blank"><i class="fa fa-facebook-square fa-2x sn_icons" aria-hidden="true"></i></a><?php endif; ?>
						<?php if($youtube): ?><a href="<?php print $youtube; ?>" target="_blank"><i class="fa fa-youtube fa-2x sn_icons" aria-hidden="true"></i></a><?php endif; ?>
						<?php if($instagram): ?><a href="<?php print $instagram; ?>" target="_blank"><i class="fa fa-instagram fa-2x sn_icons" aria-hidden="true"></i></a><?php endif; ?>
						<?php if($googleplus): ?><a href="<?php print $googleplus; ?>" target="_blank"><i class="fa fa-google-plus-official fa-2x sn_icons" aria-hidden="true"></i></a><?php endif; ?>
						<?php if($twitter): ?><a href="<?php print $twitter; ?>" target="_blank"><i class="fa fa-twitter fa-2x sn_icons" aria-hidden="true"></i></a><?php endif; ?>
					</div>
				</div>
			</div>
			<div class='footer-bottom col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
				<div class='footer-bottom-left col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12'>
					<p class='footer-bot'>Copyright &copy; <?=date('Y');?> <?php bloginfo('name'); ?>. Todos los derechos reservados</p>
				</div>
				<div class='footer-bottom-right col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12'>
					<p class='footer-bot'>Desarrollado por Alfredo Vásquez</p>
				</div>		
			</div>	
		</footer>
			<!-- End Footer Information -->
			<?php wp_footer(); ?>  
			<?php print get_option('dohko_analytics'); ?>
	</div>
</body>
</html>