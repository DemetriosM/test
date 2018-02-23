<?php 
/*
Template Name: Page Home
*/

	get_header(); 
?>
<!--Основная часть-->
<div class="main">
	<h1>What we do</h1>
	<?php include(TEMPLATEPATH.'/templates/static_html/_description.php'); ?>
	<blockquote title="blockquote">Duis aute irure dolor in reprehenderit in voluptate velit esse</blockquote>
	<!--Изображения-->
	<?php include(TEMPLATEPATH.'/templates/static_html/_images.php'); ?>
	<!--Списки и определения-->
	<?php include(TEMPLATEPATH.'/templates/static_html/_lists.php'); ?>
	<!--Таблица-->
	<?php include(TEMPLATEPATH.'/templates/static_html/_table.php'); ?>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</div>
<?php get_footer();