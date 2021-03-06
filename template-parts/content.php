<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

$source = get_post_meta( get_the_ID(), '_qod_quote_source', true );
$source_url = get_post_meta( get_the_ID(), '_qod_quote_source_url', true );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="entry-content">
<?php the_content(); ?>
</div><!-- .entry-content -->
<div class="authorSource">
<div class="entry-meta">
<p> - <?php the_title(); ?></p>
</div>
	
	
<?php if ( $source && $source_url) : ?>

<span class="source"><a href="<?php echo $source_url ?>"><?php echo $source ?></a></span>

<?php elseif ( $source ) : ?>

<span class="source"><?php echo $source ?></span>

<?php else : ?>

<span></span>

<?php endif; ?>
	
</div>
</article><!-- #post-## -->


<?php if ( is_home() || is_single()) : ?>
<button id="newQuoteButton">Show Me Another!</button>
<?php else: ?>
<span></span>
<?php endif; ?>
