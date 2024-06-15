<?php
include("config.php");


$result = $mysqli -> query("delete from blog where bid=".$_GET['bid']);


if($result){
	header("location:blog.php");
}else{
	echo "error".mysql_error();
}
?>