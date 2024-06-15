<?php
include("config.php");



$result = $mysqli -> query("delete from blogseo where bsid=".$_GET['bsid']);

if($result){
	header("location:blogseo.php");
}else{
	echo "error".mysql_error();
}
?>