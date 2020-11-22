<?php
require("../model/dbconnect.php");

$id =(int)$_GET['id'];
if ($id) {
	$sql = "update project set status=2 where project.id=$id;";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
}
echo "Message:$id completed.";
?>
<hr>
<a href='prjView.php'>back</a>
