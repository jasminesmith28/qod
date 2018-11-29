<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<section>
			<header>
			<h1><?php the_title(); ?></h1>
			</header> 

			<?php  if (is_user_logged_in() && current_user_can( 'edit_posts' )) : ?>
		<section class="form">
		 <form id="submit-quote">
		    <p>Author of the quote:</p>
			<input type="text" id="author-quote" />
			<p>Quote:</p>
			<input type="text" id="quote" />
			<p>Where did you find this quote? (e.g. book name)</p>
			<input type="text" id="quote-source" />
			<p>Provide the URL of the quote source. If available.</p>
			<input type="text" id="quote-source-url" /><br>
			<input class="submit" type="submit" value="Submit">
		 </form>
		 </section>

		<?php else : ?>

			<p>Sorry, you must be looged in to submit a quote!</p>
			<a href=“<?php echo wp_login_url( get_permalink() ); ?>” title=“Login”>Click here to login.</a>


		<?php endif; ?> 
		
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
