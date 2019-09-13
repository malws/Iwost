<?php
function enqueue_scripts(){
   wp_enqueue_script('vue', 'https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js', [], '2.5.17');
   wp_enqueue_script('axios', 'https://cdn.jsdelivr.net/npm/axios@0.18.0/index.min.js', [], '0.18.0');  
   wp_enqueue_script('vueapp', get_template_directory_uri() . '/main.js', [], '1.0', true);
   wp_enqueue_script("jquery");         
} 
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );