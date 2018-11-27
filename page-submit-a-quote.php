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
			<?php the_title(); ?>
			</header> 

			<?php  //If user is logged in  ?>
		
		 <form>
		    <p>Author of the quote:</p>
			<input type="text" id="author-quote" />
			<p>Quote:</p>
			<input type="text" id="quote" />
			<p>Where did you find this quote? (e.g. book name)</p>
			<input type="text" id="quote-reference" />
			<p>Provide the URL of the quote source. If available.</p>
			<input type="text" id="source-quote" /><br>
			<input type="submit" value="Submit">
		 </form>

				<?php  //esle display  ?>


			<p>Sorry, you must be looged in to submit a quote!</p>
			<a>Click here to login.</a>

		<!-- sorry you must login  -->

				<!-- php endif;  -->
		
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
