<?php
include("config.php");


$result = $mysqli -> query("delete from event where bid=".$_GET['bid']);


if($result){
	header("location:event.php");
}else{
	echo "error".mysql_error();
}
?>