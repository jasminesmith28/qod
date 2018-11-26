<?php
/**
 * The template for displaying Archives Page. 
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<h1>Archives</h1>

		<section class="authors">
			<h1>Quote Authors</h1>
			<?php $posts = get_posts(array('numberposts' => -1)); ?>
			<?php foreach ($posts as $post) : setup_postdata( $post );?>

			<a href="<?php  the_permalink(); ?>"><?php  the_title(); ?></a>
			<?php endforeach; wp_reset_postdata(); ?>
		
		</section>

		<section>
		<h1>Catagories</h1>
		<?php wp_tag_cloud( array('taxonomy' => 'category','smallest'=> 14, 'largest'=> 14)); ?>

		</section>

		<section>
		<h1>Tags</h1>
		<?php wp_tag_cloud(array('smallest' => 15, 'largest' => 15)); ?>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>