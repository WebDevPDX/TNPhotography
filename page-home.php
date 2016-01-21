
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

<div class="row">
	<div class="col-xs-12">
		<section>
			<div class="homeGallery">
				<?php 
					$args = array(
						'post_type' => array('post','gallery'),
						'posts_per_page' => 12,
						 );
					$latestTwelve = new WP_Query($args);
					if ( $latestTwelve->have_posts() ):
						$i = 0;
						while ( $latestTwelve->have_posts() ): $latestTwelve->the_post();
				?>
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
										<div class="homeTitleBanner container">
										<h5 class="galleryElementTitle text-center"><?php the_title(); ?></h5>
										<h5 class="galleryElementCategory text-center"><?php echo get_post_type( get_the_ID() ); ?></h5>
										</div>

									</div>
								</a>
							</div>
				<?php 
						$i++;
						endwhile;
					wp_reset_postdata();	
					endif;
				?>
				<div class="spacer"></div>
			</div>
		</section>
	</div>	
</div>



<?php get_footer(); ?>
