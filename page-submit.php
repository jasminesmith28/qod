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
			<input type="text" id="title-quote" />


			<input type="submit" value="Submit" />
		 </form>

				<?php  //esle display  ?>

		<!-- sorry you must login  -->

				<!-- php endif;  -->
		
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
