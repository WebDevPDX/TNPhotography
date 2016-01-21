<?php get_header(); ?>

<div class="row">
	<div class="col-xs-12">
	 	<section class="pageContent">
	 		<?php

	 			$args = array(
	 				'post_type' => 'gallery',
	 				'post_per_page' => 12);
	 			$loop = new WP_Query( $args );

				if ( $loop->have_posts() ):
					while ( have_posts() ): $loop->the_post();
											
					endwhile;
				endif;

				wp_reset_postdata();

			?>
		</section>
	</div>
</div>

<?php get_footer(); ?>