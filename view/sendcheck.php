<?php
require("dbconnect.php");
$status=mysqli_real_escape_string($conn,$_POST['status']);

if ($status) { //if status is not empty
	$sql = "insert into 1091se (status) values ('$status');";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	echo "Message added";
} else {
	echo "Message status cannot be empty";
}

?>
<br />
<a href="prinView.php">Back</a>