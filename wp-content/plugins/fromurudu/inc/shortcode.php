<?php
add_action('init','first_init');

 function first_init(){
     add_shortcode('test','first_my_shortcode');
 }

 function first_my_shortcode($atts){
     $atts=shortcode_atts(array(
         'message'=>'Hello , World',)
         ,$atts,'test');
         return $atts['message'];
      }
