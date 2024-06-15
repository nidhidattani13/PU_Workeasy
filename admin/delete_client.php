<?php
include("config.php");



$result = $mysqli -> query("delete from client where cli_id=".$_GET['cli_id']);

if($result){
	header("location:client.php");
}else{
	echo "error".mysql_error();
}
?>