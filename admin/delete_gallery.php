<?php
include("config.php");


$result = $mysqli -> query("delete from gallery where gid=".$_GET['gid']);


if($result){
	header("location:gallery.php");
}else{
	echo "error".mysql_error();
}
?>