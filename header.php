<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Tasha Nicole Photography</title>
		<?php wp_head(); ?>
	</head>

	<?php 
		if( is_front_page() ):
			$customThemeClasses = array ( 'homeClass' );
		else:
			$customThemeClasses = array ( 'not-homeClass' );
		endif;
	?>

	<body <?php body_class( $customThemeClasses ); ?> >
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<nav class="navbar navbar-default navbar-fixed-top">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
					      	</button>
					      	<a class="navbar-brand" href="#">TNP Logo</a>
					    </div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php 
								wp_nav_menu(array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right'));
							?>
						</div>
					  </div><!-- /.container-fluid -->
					</nav>
				</div>
			</div>
			<?php if (get_header_image() != '') : ?>
				<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
			<?php endif ?>