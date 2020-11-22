<?php
require("../model/dbconnect.php");
$tDes=mysqli_real_escape_string($conn,$_POST['tDes']);
$id=(int)$_POST['id'];

if ($tDes) { //if tDes is not empty
	$sql = "update project set tDes='$tDes' where id=$id;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	$msg="opinion updateded";
} else {
	$msg= "opinion cannot be empty";
}
header("Location: prjView.php?m=$msg");
?>