<?php

/*
  Plugin Name: First Exact plugins
  Plugin URI: http://google.lk/
  Description: Basic plugin
  Version: 1.0
  Author: Rakhitha Nimesh
  Author URI: http://gogole.com/
  License: GPLv2 or later
 */

 //include other php files metod
 include plugin_dir_path(__FILE__)."inc/shortcode.php";

//change the page title
      add_filter('the title','first_my_title');

      function first_my_title($title){
    return"<strong>$title</strong>";

}
//add js and css file
//add_action('wp_enqueue_scripts','first_enque_cssandjs');
function first_enque_cssandjs(){
    wp_enqueue_style('first_dev_style',plugin_dir_url(__FILE__)."assest/css/style.css");
    wp_enqueue_script('first_dev_script',plugin_dir_url(__FILE__)."assest/js/custom.js",array(),'1.0.0',false);
    wp_enqueue_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css');

}

//addmenu and submenus
//add_action('admin_menu','first_pluin_menu_add');
function first_pluin_menu_add(){
    add_menu_page('first_Plugin','first_pluginsetup','manage_options','fist options','first_opt_func',$icon_url='',$position=null);
    //menu page 4 th main menu need to use submenu first bcz we need insert into the ul
    add_submenu_page('fist options','submenu1_option','Student_List','manage_options','list1_options','liststu_opt_func');
    add_submenu_page('fist options','submenu2_option','Student_Add','manage_options','list2_options','addstu_opt_func');
  
}

function first_opt_func(){
    echo"<h1>This is main menu </h1>";
    echo"<input type='text' name='firsttxtbox'>";
}

function liststu_opt_func(){
    echo"<h3>List Students</3>";
}

function addstu_opt_func(){
    include plugin_dir_path(__FILE__)."views/add_student.php";

}
function insertdata(){
    ?>
    <form action="" method="post">
<input type="text" name="fname"><br>
<input type="text" name="lname"><br>
<input type="submit" name="insert" value="Insert"><br>
</form>




<?php
}

