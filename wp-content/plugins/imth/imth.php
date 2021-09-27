<?php

/*
  Plugin Name: imthy
  Plugin URI: http://1stwebdesigner.com/
  Description: Slider Component for WordPress
  Version: 1.0
  Author: Rakhitha Nimesh
  Author URI: http://1stwebdesigner.com/
  License: GPLv2 or later
 */


function sliderLink_add_meta_box() {
	add_meta_box('slider_link','Slider Link','slider_link_callback','slider');
 }
  
 function slider_link_callback( $post ) {
  
	wp_nonce_field('slider_link_save','slider_link_meta_box_nonce');
	$value = get_post_meta($post->ID,'_slider_link_value_key',true);
	?>
	 <input type="text" name="slider_link_field" id="slider_link_field" value="<?php echo esc_attr( $value ); ?>" required="required" size="100" />
	<?php
 }
 