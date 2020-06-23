<?php 
    function headScripts(){
        //  wp_enqueue_script('scripts', get_theme_file_uri('/assets/scripts/scripts.js'),null,'1.0',true);
         wp_enqueue_style('googlefont__link', '//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,500;1,700&display=swap');
        //  wp_enqueue_style('main-css', get_stylesheet_uri());

        if (strstr($_SERVER['SERVER_NAME'], 'study-group.local')) {
            wp_enqueue_script('main-js', 'http://localhost:3000/bundled.js',NULL,'1.0',true);
        }else{
            wp_enqueue_script('our-vendor-js', get_theme_file_uri('/bundled-assets/vendors.js'),NULL,'1.0',true);
            wp_enqueue_script('main-js', get_theme_file_uri('/bundled-assets/scripts.js'),NULL,'1.0',true);
            wp_enqueue_style('our-main-css', get_theme_file_uri('/bundled-assets/styles.css'));

        }
         

    }
    add_action('wp_enqueue_scripts','headScripts');

?>