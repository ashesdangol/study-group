<?php 
    function headScripts(){
         wp_enqueue_script('scripts', get_theme_file_uri('/assets/scripts/App.js'),null,'1.0',true);
         wp_enqueue_style('googlefont__link', '//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,500;1,700&display=swap');
         wp_enqueue_style('main-css', get_stylesheet_uri());

        //  wp_enqueue_script('main-js', 'http://localhost:3000/bundled.js',NULL,'1.0',true);

    }
    add_action('wp_enqueue_scripts','headScripts');

?>