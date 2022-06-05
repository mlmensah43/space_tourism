<?php 

    function space_tourism_theme_files(){
        wp_enqueue_style('google-font','https://fonts.googleapis.com/css2?family=Barlow+Condensed&family=Bellefair&display=swap');
        wp_enqueue_script('bootstrap-jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js' );
        wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css' );
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js' );
        wp_enqueue_script('bootstrap-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js' );
        wp_enqueue_script('bootstrap-modal', '/assets/js/bootstrap.js' );
        wp_enqueue_style('space_tourism_theme_main_styles',get_theme_file_uri('/assets/css/style-index.css'));
        wp_enqueue_style('space_tourism_theme_header_styles',get_theme_file_uri('/assets/css/header.css'));
        wp_enqueue_style('space_tourism_theme_blog_styles',get_theme_file_uri('/assets/css/blog.css'));
    }

    add_action('wp_enqueue_scripts','space_tourism_theme_files');

    function space_tourism_theme_features(){
        register_nav_menu('MainSiteMenuLocation', 'Main Site Menu Location');
        add_theme_support('title-tag');
        // add_theme_support( 'post-thumbnails', array( 'post', 'pets' ) );
    }
    add_action('after_setup_theme','space_tourism_theme_features');
    

    function fa_custom_setup_kit($kit_url = '') {
        foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
        add_action(
            $action,
            function () use ( $kit_url ) {
            wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
            }
        );
        }
    }
    fa_custom_setup_kit('https://kit.fontawesome.com/43a92adb03.js');

?>