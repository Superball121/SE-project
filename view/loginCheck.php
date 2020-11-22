<?php
session_start();
require("../model/userModel.php");

$userName = $_POST['id'];
$passWord = $_POST['pwd'];

if (checkUserIDPwd($userName, $passWord)) {
  $_SESSION['uID']=$userName;
  if ($_SESSION['uID'] == 'student'){
    // header("Location: mainView.php");
    header("Location: stuView.php");
  }elseif($_SESSION['uID'] == 'teacher'){
    echo $_SESSION['uID'] ;
    header("Location: ./teaView.php");
  }elseif($_SESSION['uID'] == 'secretary'){
    header("Location: ./teaView.php");
  }else{
    header("Location: ./teaView.php");
    // header("Location: ../prinView.php");
  }
} else {
	$_SESSION['uID']="";
	header("Location: loginForm.php");
}
?>