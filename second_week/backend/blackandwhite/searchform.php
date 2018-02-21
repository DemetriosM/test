<form class="search" name="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" value="<?php echo get_search_query(); ?>" name="s">
	<input type="image" src="<?= get_template_directory_uri(); ?>/images/button-search.png">
</form>