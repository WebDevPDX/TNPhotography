<?php get_header(); ?>

<div class="row">
	<div class="col-xs-12">
	 	<section class="pageContent">
	 		<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
			<?php 
				if ( have_posts() ):
					while ( have_posts() ): the_post();
						get_template_part('content', get_post_format());
					endwhile;
				endif;
			?>
		</section>
	</div>
</div>

<?php get_footer(); ?>