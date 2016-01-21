<?php 

/*
	Template Name: Gallery Template
*/

get_header(); ?>

<div class="row">
	<div class="col-xs-12">
	 	<section>
	 		<?php

	 			$args = array(
	 				'post_type' => 'gallery',
	 				'post_per_page' => 300);
	 			$loop = new WP_Query( $args );

				if ( $loop->have_posts() ):
					while ( $loop->have_posts() ): $loop->the_post(); ?>

						<div class="col-xs-3 galleryContainer <?php echo $i; ?>">
							<?php 
								if( has_post_thumbnail() ):
			 						$urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
			 					endif; 
							?>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
								<div class="galleryElementContainer">
									<div class="page-homeGalleryElement" style="background-image: url(<?php echo $urlImg; ?>);">
									</div>
									<div class="titleBanner container">
										<h5 class="galleryElementTitle text-center"><?php the_title(); ?></h5>
									</div>
								</div>
							</a>
						</div>
			
			<?php		
					endwhile;
				endif;
			?>
		</section>
	</div>
</div>

<?php get_footer(); ?>