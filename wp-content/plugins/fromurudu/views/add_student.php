
<?php
add_action('wp_enqueue_scripts','first_enque_cssandjs1');
function first_enque_cssandjs1(){
    wp_enqueue_style('first_dev_style',plugin_dir_url(__FILE__)."assest/css/style.css");
    wp_enqueue_script('first_dev_script',plugin_dir_url(__FILE__)."assest/js/custom.js",array(),'1.0.0',false);
    wp_enqueue_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css');

}
?>
/*<?php
//$path=preg_replace('/wp-contents.*$/','',__DIR__);
//require_once($path.'/wp-load.php');
?>/

<br>
<form method='post' action='' enctype=''multipart/form-data'>
<label>Please select Your Image </label><br>
<input type='file' name='image'><br><br>
<input type='submit' name='submit' value='insert'>
</form>


<?php
function uploadima(){
if(isset($_POST['submit']))
{

$image=$_FILES['image']['tmp_name'];
$name=$_FILES['image']['name'];
$image=file_get_contents($image);
$image=base64_encode($image);
print $image;

}
else{
    echo'bad';
}
}