<?php
/*
Plugin Name: Test plugin
Description: A test plugin to demonstrate wordpress functionality with BuildVu
Author: Amy Pearson
Version: 0.1
*/
add_action('admin_menu', 'test_plugin_setup_menu');
 
function test_plugin_setup_menu(){
    add_menu_page( 'Test Plugin Page', 'Test Plugin', 'manage_options', 'test-plugin', 'test_init' );
}
 
function test_init(){
    test_handle_post();
}