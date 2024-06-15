<?php
include("config.php");


$result = $mysqli -> query("delete from gallery_t where gid=".$_GET['gid']);


if($result){
	header("location:gallery_t.php");
}else{
	echo "error".mysql_error();
}
?>