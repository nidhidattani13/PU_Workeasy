


<?php


error_reporting(0);
session_start();

$mysqli = new mysqli("localhost","root","","domo");


if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>

<?php


// error_reporting(0);
// session_start();

// $mysqli = new mysqli("localhost","workeasy_we","pavak@123**","workeasy_we");


// if ($mysqli -> connect_errno) {
//   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
//   exit();
// }
?>