<?php
require("../model/dbconnect.php");
$result=mysqli_real_escape_string($conn,$_POST['result']);
$id=(int)$_POST['id'];

if ($result) { //if result is not empty
	$sql = "update project set result='$result' where id=$id;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	$msg="result updateded";
} else {
	$msg= "result cannot be empty";
}
header("Location: secView.php?m=$msg");
?>