<?php
require("../model/dbconnect.php");
$sDes=mysqli_real_escape_string($conn,$_POST['sDes']);
$id=(int)$_POST['id'];

if ($sDes) { //if sDes is not empty
	$sql = "update project set sDes='$sDes' where id=$id;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	$msg="opinion updateded";
} else {
	$msg= "opinion cannot be empty";
}
// header("Location: secView.php?m=$msg");
header("Location: prjView.php?m=$msg");
?>