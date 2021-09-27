<?php
/*
  Plugin Name: indata
  Plugin URI: http://google.lk/
  Description: Basic plugin
  Version: 1.0
  Author: shathulan
  Author URI: http://gogole.com/ 
  License: GPLv2 or later
 */
//$path=preg_replace('/wp-content.*$/','',__DIR__);
//require_once($path.'/wp-load.php');

 function insertdatatodb(){
  if(isset($_POST['submit'])){
         global $wpdb;
         $sql="select * from wp_ima";
  $result=$wpdb->get_results($sql);
  foreach($result as $results){
      print $results->name."<br><br>";
      }
           $image=$_FILES['image']['tmp_name'];
         $name=$_FILES['image']['name'];
         $image=file_get_contents($image);
         $image=base64_encode($image);
$wpdb->insert('wp_ima',array('name'=>$name,'ima'=>$image));
echo 'ok success';
$File_dir = $_FILES['file-input']['tmp_name'][$i];
                $save = "/images/" . $_FILES['file-input']['name'][$i];
                move_uploaded_file($File_dir, $save);
            }
            $dir = plugin_dir_url(__file__).'indata/images';
            $photo = glob($dir . "*.jpeg");
            foreach ($photo as $photos) {
                ?>
                    <img src="<?php print_r($photos) ?>"><?php
     }
 ?>
    <form action="" method="Post" enctype="multipart/form-data">
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" ><br>
    <label for="image">image here:</label><br>
    <input type="file" id="lname" name="image" ><br><br>
    <input type="submit" value="Submit" name="submit">
  </form> 

  <?php

  
  }
 


 add_shortcode('indatasks1','insertdatatodb');

