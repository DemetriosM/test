<?php get_header(); ?>

<!--Основная часть-->
<div class="main">

		<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'blackandwhite' ), get_search_query() ); ?></h1>

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div><?php the_excerpt(); ?></div>
			<?php endwhile; ?>

			<?php 
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'blackandwhite' ),
				'next_text'          => __( 'Next page', 'blackandwhite' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'blackandwhite' ) . ' </span>',
			) );
			?>
		<?php endif; ?>

</div>

<?php get_footer();
