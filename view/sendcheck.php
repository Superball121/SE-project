<?php
require("../Model/dbconnect.php");
$status=mysqli_real_escape_string($conn,$_POST['status']);
$id=mysqli_real_escape_string($conn,$_POST['id']);

if ($status) { //if status is not empty
	$sql = "UPDATE `project` SET `status` = '$status' WHERE `project`.`id` = '$id';";
	mysqli_query($conn, $sql) or die("Update failed, SQL query error"); //執行SQL
	echo "Status confirmed";
} else {
	echo "Message status cannot be empty";
}

?>
<br />
<a href="prinView.php">Back</a>