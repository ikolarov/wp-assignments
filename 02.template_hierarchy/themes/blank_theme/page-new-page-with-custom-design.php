<?php if(have_posts()) : ?>
	<a href="<?php the_permalink(); ?>" title="<?php sprintf( __( 'Permanent Link to %s', 'theme-name' ), the_title_attribute( 'echo=0' ) ); ?>">
		<?php the_title(); ?>
	</a>
<?
	the_excerpt();
	the_content();
	the_category();
	the_author();
	the_date();
	the_post();
?>
	<br />
<?php endif; ?>