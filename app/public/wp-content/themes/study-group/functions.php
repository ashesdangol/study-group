<?php 
    function headScripts(){
         wp_enqueue_style('headStyle__link', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts','headScripts');

?>