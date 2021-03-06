<?php 

	//adding custom styles and scripts
	function falkscustomtheme_script_enqueue () {
		//adding custom stylesheet and bootstrap css
		wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.6', 'all' );
		wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/TNPhotography.css', array(), '1.0.0', 'all' );
		//adding jquery library, custom javascript and bootstrap js
		wp_enqueue_script( 'jQueryLibrary', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js', array(), '2.2.0', true );
		wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/TNPhotography.js', array(), '1.0.0', true );
		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.6', true );
	}

	//activating the enqueued scripts
	add_action( 'wp_enqueue_scripts', 'falkscustomtheme_script_enqueue');

	//adding menus as well as creating a primary and secondary menu
	function falkscustomtheme_setup () {
		
		add_theme_support('menus' );
		
		register_nav_menu( 'primary', 'Primary Header Navigation' );
		register_nav_menu( 'secondary', 'Footer Navigation' );

	}

	//loading the menus at initialisation of site
	add_action( 'init', 'falkscustomtheme_setup');

	//adding support functions (WP admmin panel options) for the below
	add_theme_support('custom-background' );
	add_theme_support('custom-header' );
	add_theme_support('post-thumbnails' );

	//adding support for html 5
	add_theme_support('html5',array('search-form'));

	//adding support functions (WP admmin panel options) the below 3 custom post formats	
	add_theme_support('post-formats', array('aside', 'image', 'video') );
 
 	//sidebar function
 	function falkscustomtheme_widget_setup () {
 		   /**
 			* Creates a sidebar
 			* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
 			*/
 			$args = array(
 				'name'          => 'Sidebar',
 				'id'            => 'sidebar-1',
 				'description'   => 'Standard Sidebar',
 				'class'         => 'custom',
 				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
 				'after_widget'  => '</aside>',
 				'before_title'  => '<h2 class="widgettitle">',
 				'after_title'   => '</h2>'
 			);
 		
 			register_sidebar( $args );
 	}

 	//adding the sidebar	
 	add_action('widgets_init', 'falkscustomtheme_widget_setup' );

 	//adding custom post type
 	function gallery_post_type () {
 		$labels = array(
 			'name'=> 'gallery',
 			'singular_name' => 'gallery',
 			'add_new' => 'Add Gallery Item',
 			'add_new_item' => 'Add Gallery Item',
 			'edit_item' => 'Edit Item',
 			'new_item' => 'New Gallery Item',
 			'view_item' => 'View Item',
 			'search_item' => 'Search Gallery',
 			'not_found' => 'No items found.',
 			'not_found_in_trash' => 'No items found in trash.',
 			'parent_item_colon' => 'Parent Item'
 			);

 		$args = array(
 			'labels' => $labels,
 			'public' => true,
 			'has_archive' => true,
 			'publicly_queryable' => true,
 			'query_var' => true,
 			'rewrite' => true,
 			'capability_type' => 'post',
 			'hierarchical' => false,
 			'supports' => array (
 				'title',
 				'editor',
 				'excerpt',
 				'thumbnail',
 				'revisions'
 				),
 			'taxaonimies' => array (
 				'catergory',
 				'post_tag'
 				),
 			'menu_position' => 3,
 			'exclude_from_search' => false
 			);

 	register_post_type('gallery',$args);
 	}

 	add_action( 'init', 'gallery_post_type' );
 ?>