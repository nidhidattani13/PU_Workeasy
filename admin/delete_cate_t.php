<?php
include("config.php");

$r = $mysqli -> query("delete from gal_cate_t where cid=".$_GET['cid']);

$re = $mysqli -> query("delete from gallery_t where cid=".$_GET['cid']);

if($re){
	header("location:add-cate_t.php");
}else{
	echo "error".mysql_error();
}
?>