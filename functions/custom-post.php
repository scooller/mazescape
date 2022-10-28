<?php
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'banner',
		array(
		  'labels' => array(
			'name' => 'Banners',
			'singular_name' => 'Banner'
		  ),
		  'menu_icon' => "dashicons-slides",
		  'menu_position' => 3,
		  'public' => true,
		  'has_archive' => false,
		  'taxonomies' => array('category'),
		  'supports' => array (
			'title',
			'author',
			'editor',
			'page-attributes',
			'custom-fields'
		  )
		)
	);
	//--
	register_post_type( 'video',
		array(
		  'labels' => array(
			'name' => 'Videos',
			'singular_name' => 'Video'
		  ),
		  'menu_icon' => "dashicons-video-alt3",
		  'menu_position' => 3,
		  'public' => true,
		  'has_archive' => true,
		  'supports' => array (
			'title',
			'author',
			'editor',
			'page-attributes',
			'custom-fields'
		  )
		)
	);	
	//--
}
function wpse_category_set_post_types( $query ){
    if( $query->is_category() && $query->is_main_query() ){
        $query->set( 'post_type', array( 'post', 'testimonio', 'producto' ) );
    }
}
add_action( 'pre_get_posts', 'wpse_category_set_post_types' );