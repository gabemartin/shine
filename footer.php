			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="row">
					<!-- copyright -->
					<p class="copyright">
						COPYRIGHT <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.
					</p>
					<!-- /copyright -->
				</div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
		<script>
			$(function() {
				$('.menu-icon').click(function(){
					$('html').toggleClass('activate');
					setTimeout(function(){ $('html').toggleClass('show-nav'); }, 300);
				});
			});
			var wHeight = $( window ).height();
			if (wHeight > 670) {
				$(".page-template-template-Contact-php #map").css( "height", wHeight - 266 );
			}
		</script>

		<script src="<?php echo get_template_directory_uri(); ?>/js/lib/velocity.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/lib/velocity-ui-pack.js"></script>
	</body>
</html>
