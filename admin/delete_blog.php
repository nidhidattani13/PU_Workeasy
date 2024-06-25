<?php
include("config.php");

$result = $mysqli->query("DELETE FROM vlog WHERE v_id=" . $_GET['id']);

if ($result) {
    header("Location: vlog.php");
} else {
    echo "Error: " . $mysqli->error;
}
?>
