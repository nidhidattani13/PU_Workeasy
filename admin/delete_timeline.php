<?php
include("config.php");

$result = $mysqli -> query("delete from timeline where tlid=".$_GET['tlid']);

if($result){
	header("location:timeline.php");
}else{
	echo "error".mysql_error();
}
?>