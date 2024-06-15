<?php
include("config.php");

$r = $mysqli -> query("delete from gal_cate where cid=".$_GET['cid']);

$re = $mysqli -> query("delete from gallery where cid=".$_GET['cid']);

if($re){
	header("location:add-cate.php");
}else{
	echo "error".mysql_error();
}
?>