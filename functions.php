<?php


    // FORCE DEBUG
    if ( isset( $_GET['debug'] ) && 'debug' == $_GET['debug'] ) {
        define( 'WP_DEBUG', true );
    }
    if (!session_id()) {
        session_start();
    }

    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
// SCRIPTS E JS WORDPRESS
    function site_scripts() {
        wp_enqueue_style( 'Style', get_template_directory_uri() .'/style.css' );
        wp_enqueue_style( 'Style-Principal', get_template_directory_uri() .'/css/style.min.css' );
        if(!is_front_page()){
        wp_enqueue_style( 'Flicket', 'https://unpkg.com/flickity@2/dist/flickity.min.css');
        }
        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', false );
        wp_enqueue_script('sticky', get_template_directory_uri() . '/js/sticky.js', array(), '1.0.0', true );
        wp_enqueue_script('Scripts', get_template_directory_uri() . '/js/site.js', array(), '1.0.2', true );

    }
    add_action( 'wp_enqueue_scripts', 'site_scripts' );

    // TITULO ESTRUTURADO PARA SEO WORDPRESS
    add_filter( 'wp_title', 'site_titlee' );
    
    function site_titlee( $title ) {
      global $page, $paged;
      if ( is_feed() )
        return $title;
      $site_description = get_bloginfo( 'description' );
      $filtered_title = $title . get_bloginfo( 'name' );
      $filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
      $filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) ) : '';

      return $filtered_title;
    }
    
    function wpdocs_after_setup_theme() {
        add_theme_support( 'html5', array( 'search-form' ) );
    }
    add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );


    if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Informações gerias',
        'menu_title'    => 'Informações gerais',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_page(array(
        'page_title'    => 'Menus',
        'menu_title'    => 'Menus',
        'menu_slug'     => 'theme-general-menus',
        'capability'    => 'edit_posts',
        'redirect'      => false,
    ));

}

// SUPORTE DE IMAGEM DESTACADA WORDPRESS
    add_theme_support( 'post-thumbnails' );



// REGISTRO DE POST TYPE
		add_action('init', 'modal_register');
		function modal_register() {
			$labels = array('name' => __('Modais'),'singular_name' => __('Item'),'add_new' => __('Novo'));
			$args = array(
					'labels' => $labels,
					'public' => true,
					'publicly_queryable' => true,
					'show_ui' => true,
					'query_var' => true,
					'rewrite' => array('slug' => 'modal'),
					'capability_type' => 'post',
					'hierarchical' => false,
					'menu_position' => null,
					'supports' => array('title')
			);
			register_post_type('modais',$args);
		}

?>