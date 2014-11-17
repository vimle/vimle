			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="wrap footer-info clear">
					<div class="column-6">
						<img src="<?php echo bloginfo('template_url');?>/img/large-logo.png" alt="Vimle Logo">
					</div>
					<div class="column-6">
						<h3>Give us a call</h3>
						<p>We would love to hear from you.</p>
						<div class="contact-details">
							<span class="contact-phone"><i class="icon-phone"></i>+63 917 546 0727</span>
							<span class="contact-mail"><i class="icon-envelope"></i>support@vimle.com</span>
						</div>

						<h3>We are social</h3>
						<div class="social-icons">
							<i class="icon-facebook"></i>
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
