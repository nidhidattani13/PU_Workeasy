<?php
include("config.php");



$result = $mysqli -> query("delete from testi where tid=".$_GET['tid']);

if($result){
	header("location:testimonial.php");
}else{
	echo "error".mysql_error();
}
?>