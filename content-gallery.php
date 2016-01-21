<div class="row">
	<?php 
		$args = array(
			'post_type' => 'gallery'
			 );
		$latestEntries = new WP_Query($args);

		if ( $latestEntries->have_posts() ):
			$i = 0;
			while ( $latestEntries->have_posts() ): $latestEntries->the_post();
	?>	
				<?php if ($i == 0 || $i == 3 || $i == 6 || $i == 9 || $i == 12): $column = 12 ?>
				<?php elseif ($i == 1 || $i == 2 || $i == 4 || $i == 5 || $i == 7 || $i == 8 || $i == 10 || $i == 11): $column = 6; $class = ' secondRowPadding' ?>
				<?php endif ?>

					<div class="col-xs-<?php echo $column; echo $class;?>">
						<?php 
					 		if( has_post_thumbnail() ):
					 		$ImgURI = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
					 		endif; 
				 		?>						
							<div class="blogElement" style="background-image: url(<?php echo $ImgURI ?>);">
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="titleBanner container">						 	
								 		<?php the_title( sprintf('<h1 class="blogTitle entry-title text-center"><a class="titleLink" href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
									</div>
								</article>
							</div> 
						</div>
				
	<?php 	$i++;
			endwhile;
		endif;
	?>
</div>