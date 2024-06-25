<?php
include("config.php");


$result = $mysqli -> query("DELETE from vlog where v_id=".$_GET['v_id']);


if($result){
	header("location:vlogs.php");
    exit;
}else{
	echo "Error deleting vlog: " . $mysqli->error;
}
?>

