
<?php get_header(); ?>
<div class="jumbotron">
	<div class="row">
		<div class="col-xs-12">
			<header class="entry-header">
		 		<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
		 	</header>
			<?php 
				if ( have_posts() ):
					while ( have_posts() ): the_post();
						get_template_part('content', get_post_format());
					endwhile;
				endif;
			?>
		</div>
	</div>
</div>
<div class="jumbotron">
	<div class="row">
		<div class="col-xs-12">
			<?php 
				$args = array(
					'type' => 'post',
					'posts_per_page' => 12,
					'category__in' => array ( 10 ),
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
							<div class="page-homeGalleryElement" style="background-image: url(<?php echo $urlImg; ?>);">
								<small class="GalleryElementTitle"><?php the_title(); ?></small>
							</div>
						</div>
			
			<?php 
					$i++;
					endwhile;
				endif;
			?>
		</div>	
	</div>
</div>

<?php get_footer(); ?>
