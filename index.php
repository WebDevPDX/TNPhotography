
<?php get_header(); ?>

<div class="row">
	<div class="col-xs-12 col-sm-9">

		<!-- WP query call in template part -->
		<?php get_template_part( 'content','blog' ); ?>

	</div>
	<div class="col-xs-12 col-sm-3">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>

