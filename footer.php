			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="wrap">
					Main Footer
				</div>

				<!-- copyright -->
				<div class="copyright">
					<div class="wrap">
						<p>&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'tranx'); ?>
						<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//tranx.com" title="HTML5 Blank">HTML5 Blank</a>.</p>
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