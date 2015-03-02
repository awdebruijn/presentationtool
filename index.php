<?php
/**
 * @package WordPress
 * @subpackage New_Business
 * @since New Business 0.0.1
 */
get_header(); ?>
<?php if ( $slides = get_field( 'slides' ) ): ?>
	<?php while ( has_sub_field( 'slides' ) ): ?>
		<?php if ( get_row_layout() == 'chapter' ): // layout: Chapter ?>
			<?php get_template_part( 'templates/slide', 'chapter' ); ?>
		<?php endif; ?>
		<?php if ( get_row_layout() == 'video' ): // layout: Video ?>
			<?php get_template_part( 'templates/slide', 'video' ); ?>
		<?php endif; ?>
		<?php if ( get_row_layout() == 'text' ): // layout: Text ?>
			<?php get_template_part( 'templates/slide', 'text' ); ?>
		<?php endif; ?>
		<?php if ( get_row_layout() == 'image_presenter' ): // layout: Image Presenter ?>
			<?php get_template_part( 'templates/slide', 'presenter' ); ?>
		<?php endif; ?>
		<?php if ( get_row_layout() == 'default' ): // layout: Default ?>
			<?php get_template_part( 'templates/slide', 'relation' ); ?>
		<?php endif; ?>

	<?php endwhile; ?>
<?php else : // No blocks added yet ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<p>Add some content blocks please...</p>
		</div>
	</div>
</div>

<?php endif; ?>

<!-- 
<?php
$fields = get_fields();
echo '<pre>';
var_dump( $fields ); 
echo '</pre>';
?>

-->
<?php get_footer(); ?>