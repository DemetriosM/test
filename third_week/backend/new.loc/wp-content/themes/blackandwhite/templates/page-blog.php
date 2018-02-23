<?php 
/*
Template Name: Page Blog
*/

	get_header(); 
?>
<!--Основная часть-->
<div class="main">
	<h1><?php the_title(); ?></h1>
	<?php include(TEMPLATEPATH.'/templates/static_html/_description.php'); ?>
	<!--Списки и определения-->
	<?php include(TEMPLATEPATH.'/templates/static_html/_lists.php'); ?>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</div>
<?php get_footer();