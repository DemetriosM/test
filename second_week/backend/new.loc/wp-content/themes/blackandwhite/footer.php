			</div>
			<!--Подвал-->
			<div class="footer">
				<div>
					<?php wp_nav_menu(array('theme_location' => 'footer-menu', 
											'menu_class' => 'nav nav-footer',
											'container' => false,
											'fallback_cb' => false)); ?>
					<?php 
						$location = get_field( "gmap", false );
						if( !empty($location) ): ?>
    						<div class="acf-map">
								<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
							</div>
					<?php endif; ?>				
					<?php
						if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('footer1');
					?>
				</div>
				<p>&copy; Footer content <a href="http://psd-html-css.ru">Link footer</a></p>
			</div>
		</div>	
		<?php wp_footer(); ?>
	</body>
</html>