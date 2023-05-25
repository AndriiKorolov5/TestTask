<?php
    add_action( 'wp_enqueue_scripts', 'tahiti_styles' );
    function tahiti_styles() {
        wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css'); 
        wp_enqueue_style( 'main-fonts', 'https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;700&family=Roboto:ital,wght@0,400;1,300&display=swap');
        wp_enqueue_style( 'test-css', get_template_directory_uri() . '/assets/css/style.css');  
    }

    add_action( 'wp_enqueue_scripts', 'tahiti_scripts');
    function tahiti_scripts() {
        wp_deregister_script( 'jquery' );
        wp_enqueue_script( 'jquery-ST', 'https://code.jquery.com/jquery-3.6.0.min.js');
        wp_enqueue_script( 'popper-SP', 'https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js');
        wp_enqueue_script( 'bootstrap-SB', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js');
        wp_enqueue_script( 'nicescroll-js', get_stylesheet_directory_uri() . '/assets/js/jquery.nicescroll.js', '', null, true);
        wp_enqueue_script( 'test-js', get_stylesheet_directory_uri() . '/assets/js/main.js', '', null, true);
    }
    
    
    function getPostViews($postID){
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0";
        }
        return $count;
    }
    function setPostViews($postID) {
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        }else{
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }
    add_filter('manage_posts_columns', 'posts_column_views');
    add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
    function posts_column_views($defaults){
        $defaults['post_views'] = __('Просмотры');
        return $defaults;
    }
    function posts_custom_column_views($column_name, $id){
            if($column_name === 'post_views'){
            echo getPostViews(get_the_ID());
        }
    }
    
    function create_posttype() {
        register_post_type( 'Team',

        array(
          'labels' => array(
           'name' => __( 'Team' ),
           'singular_name' => __( 'Team' )
          ),
          'public' => true,
          'has_archive' => false,
          'rewrite' => array('slug' => 'team'),
         )
        );
    }
    add_action( 'init', 'create_posttype' );
