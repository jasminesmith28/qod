<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="entry-content">
<?php the_content(); ?>
</div><!-- .entry-content -->
<div class="entry-meta">
<h2><?php the_title(); ?></h2>
</div>
		
<?php if (!empty($source) && (!empty($source_url))) : ?>
	,
	<span class="source"><a href="<?php echo $source_url ?>"><?php echo $source ?></a></span>

<?php elseif ( $source ) : ?>
	<span class="source"><?php echo $source ?></span>

<?php else : ?>
	<span></span>

<?php endif; ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
