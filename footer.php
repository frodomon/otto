		<footer>
			<?php 
				$address_line_1 = get_option('dohko_address_line_1');
				$address_line_2 = get_option('dohko_address_line_2');
				$address_line_3 = get_option('dohko_address_line_3');
				$telephone = get_option('dohko_telephone');
				$mobile = get_option('dohko_mobile');
				$whatsapp = get_option('dohko_whatsapp');
				$email = get_option('dohko_email');
				$working_days_1 = get_option('dohko_working_days_1');
				$working_days_2 = get_option('dohko_working_days_2');
				$working_days_3 = get_option('dohko_working_days_3');
				$working_hours_1 = get_option('dohko_working_hours_1');
				$working_hours_2 = get_option('dohko_working_hours_2');
				$working_hours_3 = get_option('dohko_working_hours_3');
				$facebook = get_option('dohko_facebook');
				$youtube = get_option('dohko_youtube');
				$instagram = get_option('dohko_instagram');
				$googleplus = get_option('dohko_googleplus');
				$twitter = get_option('dohko_twitter');
			?>
			<div class="footer-top flex-center-col">
				<div class="footer-logo">
				  <?php $url = home_url( '/' ); ?>
      		<a href="<?php echo esc_url($url) ?>">
						<img id="footer-logo" src="<?php echo get_template_directory_uri().'/images/Logo Otto.png'; ?>" alt="<?php bloginfo('name'); ?>">
					</a>
				</div>
				<?php if($address_line_1): ?> 
					<div class='footer-address group'>
						<div class='footer-content'>
							<?php if($address_line_1): ?><p><i class="fa fa-map-marker" aria-hidden="true"></i>  <?php print $address_line_1; ?></p><?php endif; ?>
							<?php if($address_line_2): ?><p><?php print $address_line_2; ?></p><?php endif; ?>
							<?php if($address_line_3): ?><p><?php print $address_line_3; ?></p><?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if($email): ?> 
					<div class="footer-email group">
						<div class='footer-content'>
							<p><a href='mailto: <?php print $email; ?>'><i class="fa fa-envelope" aria-hidden="true"></i> <?php print $email; ?></a></p>
						</div>
					</div>
				<?php endif; 	?>
				<?php if($mobile): ?> 
					<div class="footer-mobile group">
						<div class='footer-content'>
							<p><a href="tel:<?php print $mobile; ?>"><i class="fa fa-mobile" aria-hidden="true"></i> <?php print $mobile; ?></a></p>
						</div>
					</div>
				<?php endif; ?>
				<div class='footer-social'>
					<?php if($facebook): ?><a href="<?php print $facebook; ?>" target="_blank"><i class="fa fa-facebook-square fa-2x sn_icons" aria-hidden="true"></i></a><?php endif; ?>
					<?php if($youtube): ?><a href="<?php print $youtube; ?>" target="_blank"><i class="fa fa-youtube fa-2x sn_icons" aria-hidden="true"></i></a><?php endif; ?>
					<?php if($instagram): ?><a href="<?php print $instagram; ?>" target="_blank"><i class="fa fa-instagram fa-2x sn_icons" aria-hidden="true"></i></a><?php endif; ?>
					<?php if($googleplus): ?><a href="<?php print $googleplus; ?>" target="_blank"><i class="fa fa-google-plus-official fa-2x sn_icons" aria-hidden="true"></i></a><?php endif; ?>
					<?php if($twitter): ?><a href="<?php print $twitter; ?>" target="_blank"><i class="fa fa-twitter fa-2x sn_icons" aria-hidden="true"></i></a><?php endif; ?>
				</div>
			</div>
			<div class='footer-bottom col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
				<div class='footer-bottom-left col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12'>
					<p class='footer-bot'>Copyright &copy; <?=date('Y');?> <?php bloginfo('name'); ?>. Todos los derechos reservados</p>
				</div>
				<div class='footer-bottom-right col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12'>
					<p class='footer-bot'>Desarrollado por <a href="https://pe.linkedin.com/in/alfredohvasqueza" target="_blank"><strong>Alfredo Vásquez</strong></a></p>
				</div>		
			</div>	
		</footer>
			<!-- End Footer Information -->
			<?php wp_footer(); ?>  
			<?php print get_option('dohko_analytics'); ?>
	</div>
</body>
</html>