			<!-- footer -->
			<footer class="pt-footer" role="contentinfo">
				<div class="pt-container">
					<div class="pt-nav-footer">
						<?php html5blank_nav('bottom-menu'); ?>
					</div>
					<div class="pt-row">
						<?php
              if (is_active_sidebar('footer-1')) { ?>
                <div class="pt-col-3">
                    <?php dynamic_sidebar('footer-1'); ?>
                </div>
            <?php } ?>

            <?php
              if (is_active_sidebar('footer-2')) { ?>
                <div class="pt-col-3">
                    <?php dynamic_sidebar('footer-2'); ?>
                </div>
            <?php } ?>

            <?php
              if (is_active_sidebar('footer-3')) {?>
                <div class="pt-col-3">
                    <?php dynamic_sidebar('footer-3'); ?>
                </div>
            <?php } ?>
					</div>
				</div>
				<div class="pt-copyright">
					<div class="pt-container">
						<p class="copyright">
							&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?> - Giao diện được thiết kế bởi <?php bloginfo('name');?>
						</p>
					</div>
				</div>
			</footer>
		</div>
		
		<div style="position:fixed;z-index:9999;bottom:0px;left:0;width:100%;height:35px;background:url('<?php echo get_template_directory_uri(); ?>/img/bg_snow.png') repeat-x bottom left;"></div>			
		<img class="img_left_fixed" style="position:fixed;z-index:99990;bottom:-10px;right:0px; width: 250px;" src="https://phanthanhblog.com/wp-content/uploads/2018/12/santa-xmas-e1545121919963.png" />
		<img class="img_left_fixed" style="position:fixed;z-index:9998;bottom: 10px;left:10px; width: 300px;" src="https://phanthanhblog.com/wp-content/uploads/2018/12/thong-e1545122029217.png" />
		<!--<script src='https://blog.hocmai.vn/wp-content/uploads/2017/12/snow2017.js?v=805' type='text/javascript'></script>-->
		
		<span id="goTop" class="bd-circle t-center" style="display: inline;"><i class="fas fa-chevron-up"></i></span>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>
	    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
		<?php wp_footer(); ?>
		
		<script src='<?php echo get_template_directory_uri(); ?>/js/snow_2018.js?' type='text/javascript'></script>
		<style>
			.snow-canvas {
			display: block;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			position: fixed;
			pointer-events: none;
			z-index: 100;
			}
		</style>
		<canvas class="snow-canvas" speed="1" interaction="false" size="2" count="80" opacity="0.00001" start-color="rgba(253,252,251,1)" end-color="rgba(251,252,253,0.3)" wind-power="0" image="false" width="1366" height="667"></canvas>
		<canvas class="snow-canvas" speed="3" interaction="true" size="6" count="30" start-color="rgba(253,252,251,1)" end-color="rgba(251,252,253,0.3)" opacity="0.00001" wind-power="2" image="false" width="1366" height="667"></canvas>
		<canvas class="snow-canvas" speed="3" interaction="true" size="12" count="20" wind-power="-5" image="//theme.hstatic.net/1000036599/1000309323/14/snow-style.png?v=805" width="1366" height="667"></canvas>
		<script>
		$(".snow-canvas").snow();
		</script>
	</body>
</html>
