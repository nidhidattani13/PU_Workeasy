<?php
include("config.php");

$result = $mysqli -> query("delete from product where pid=".$_GET['pid']);

if($result){
	header("location:product.php");
}else{
	echo "error".mysql_error();
}
?>