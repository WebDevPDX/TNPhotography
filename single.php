<?php get_header(); ?>

<div class="row">
	
	<div class="col-xs-12 col-sm-12">
		
		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<?php the_title('<h1 class="entry-title">','</h1>' ); ?>
								
					<small><?php the_category(' '); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?></small>
					
					<div class="singleCategory">
						
						<?php the_content(); ?>
						
						<hr>
						
						<?php 
							if( comments_open() ){ 
								comments_template(); 
							} else {
								echo '<h5 class="text-center">Sorry, Comments are closed!</h5>';
							}
							
						?>
				
					</div>

				</article>

			<?php endwhile;
			
		endif;
				
		?>
	
	</div>
	
</div>

<?php get_footer(); ?> 
