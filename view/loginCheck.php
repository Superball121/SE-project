<?php
session_start();
require("../model/userModel.php");

$userName = $_POST['id'];
$passWord = $_POST['pwd'];

if (checkUserIDPwd($userName, $passWord)) {
  if($_SESSION['uID']=='student'){
    header("Location: stuView.php");
  }else if($_SESSION['uID']=='teacher'){
    header("Location: teaView.php");
  }else if($_SESSION['uID']=='secretary'){
    header("Location: secView.php");
  }else{
    header("Location: prinView.php");
    // echo $userName;
  }
} else {
	$_SESSION['uID']="";
	header("Location: loginForm.php");
}
?>