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
		<section class="archive">
		<div>
			<h2>Quote Authors</h2>
			<?php $posts = get_posts(array('numberposts' => -1)); ?>
			<?php foreach ($posts as $post) : setup_postdata( $post );?>

			<a href="<?php  the_permalink(); ?>"><?php  the_title(); ?></a>
			<?php endforeach; wp_reset_postdata(); ?>
		
			</div>

		<div>
		<h2>Catagories</h2>
		<p><?php wp_tag_cloud( array('taxonomy' => 'category', 'smallest' => 14, 'largest' => 14)); ?></p>
		</div>

		<div>
		<h2>Tags</h2>
		<p><?php wp_tag_cloud(array('smallest' => 14, 'largest' => 14)); ?></p>
		</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>