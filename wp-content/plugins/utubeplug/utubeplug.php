<?php


/*
  Plugin Name: utubeplug
  Plugin URI: http://google.lk/
  Description: Basic plugin
  Version: 1.0
  Author: Rakhitha Nimesh
  Author URI: http://gogole.com/
  License: GPLv2 or later
 */
//add_filter( 'show_admin_bar', '__return_false' );

function donate_shortcode( $atts, $content = null) {
    global $post;extract(shortcode_atts(array(
    'account' => 'k.sadulan@gmail.com',
    'for' => $post->post_title,
    'onHover' => 'Donate to shathulan',
    ), $atts));
    if(empty($content)) $content='Make A Donation';
    return '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business='.$account.'&item_name=Donation for '.$for.'" title="'.$onHover.'">'.$content.'</a>';
    }
    add_shortcode('donate', 'donate_shortcode');
    // useage of shortcode [donate]My Text Here[/donate]

  
    
    function wporg_options_page_html() {
        ?>
        <div class="wrap">
          <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
          <form action="options.php" method="post">
            <?php
            // output security fields for the registered setting "wporg_options"
            settings_fields( 'Testing' );
            // output setting sections and their fields
            // (sections are registered for "wporg", each field is registered to a specific section)
            do_settings_sections( 'Testing' );
            // output save settings button
            submit_button( __( 'Save Settings', 'textdomain' ) );
            ?>
          </form>
        </div>
        <?php
    }
    ?>
    <?php
add_action( 'admin_menu', 'wporg_options_page' );
function wporg_options_page() {
    add_menu_page(
        'Testing',
        'Testings',
        'manage_options',
        'wporg',
        'wporg_options_page_html',
        plugin_dir_url(__FILE__) . 'images/icon_wporg.png',
        20
    );
}
?>