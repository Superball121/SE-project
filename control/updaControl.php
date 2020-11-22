<?php
require("../model/projectModel.php");

$name=mysqli_real_escape_string($conn,$_POST['name']);
$stuID=mysqli_real_escape_string($conn,$_POST['stuID']);
$mom=mysqli_real_escape_string($conn,$_POST['mom']);
$dad=mysqli_real_escape_string($conn,$_POST['dad']);
$type=mysqli_real_escape_string($conn,$_POST['type']);

// $tDes=mysqli_real_escape_string($conn,$_POST['tDes']);
// $sDes=mysqli_real_escape_string($conn,$_POST['sDes']);
// $status=mysqli_real_escape_string($conn,$_POST['status']);
// $result=mysqli_real_escape_string($conn,$_POST['result']);
// $id=(int)$_POST['id'];
// $urgent=mysqli_real_escape_string($conn,$_POST['urgent']);

if ($name) { //if title is not empty
	addPro($name,$stuID,$mom,$dad,$type);
	// updateJob($id,$name,$stuID,$mom,$dad,$type,$tDes,$sDes,$status,$result);
	$msg="Message updateded";
} else {
	$msg= "Message title cannot be empty";
}
header("Location: ../view/stuView.php?m=$msg");

?>