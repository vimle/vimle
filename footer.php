			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="wrap footer-info clear">
					<div class="column-4">
						<h3>Contact Us</h3>
						<p>We Would Love To Hear From You.</p>
						<?php echo do_shortcode('[contact-form-7 id="74" title="Contact Us"]'); ?>
					</div>
					<div class="column-4">
						<h3>We are Vimle</h3>
						<br>
						<p>Vimle LLC is an online retail company founded in 2012. Our primary office is located in Arizona, USA. We have also established satellite offices in the Philippines and in China. Through the years, we have endeavored to forge a sterling reputation in online business. With over a hundred employees in multiple countries, together we work to deliver quality service to our valued customers in the United States, United Kingdom, and various other countries.</p>
					</div>
					
					<div class="column-4">
						<h3>Give us a call</h3>
						<p>We would love to hear from you.</p>
						<div class="contact-details">
							<span class="contact-phone"><i class="icon-phone"></i>+63 917 546 0727</span>
							<span class="contact-mail"><i class="icon-envelope"></i>support@vimle.com</span>
						</div>

						<h3>We are social</h3>
						<p>Access exclusive content &amp; updates!</p>
						<div class="social-icons">
							<a href="http://fb.com/1470792726469463" target="_blank"><i class="icon-facebook"></i></a>
							<i class="icon-twitter"></i>
							<i class="icon-googleplus"></i>
						</div>
					</div>
				</div>

				<!-- copyright -->
				<div class="copyright">
					<div class="wrap">
						<p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
					</div>
				</div>
				<!-- /copyright -->
					
			</footer>
			<!-- /footer -->

			<!-- contact-form-modal -->
			<div class="contact-form-modal">
				<?php echo do_shortcode('[contact-form-7 id="9" title="Contact Us"]'); ?>
			</div>
			<!-- /contact-form-modal -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
