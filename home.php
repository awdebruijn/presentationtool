<?php
/**
 * @package WordPress
 * @subpackage New_Business
 * @since New Business 0.0.1
 */
get_header(); ?>


<?php
$args = array(
	'post_type' => 'presentation',
	'posts_per_page' => -1
);
$pres = get_posts( $args );

print_r($pres);
?>
<?php if( $pres ) : ?>
<?php foreach( $pres as $post ) : setup_postdata( $post ); ?>

<<<<<<< HEAD


=======
>>>>>>> eb060c1d8469e6189dac9afe037cb99f985ae838
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<?php endforeach; ?>
<?php else: ?>
	<p> no presentations yet </p>
<?php endif; ?>

<?php get_footer(); ?>