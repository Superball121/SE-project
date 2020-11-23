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
    header("Location: ./prjView.php");
  }elseif($_SESSION['uID'] == 'secretary'){
    echo $_SESSION['uID'] ;
    header("Location: ./prjView.php");
    // header("Location: secView.php");
  }else{
    header("Location: ./prjView.php");
    // header("Location: ../prinView.php");
  }
} else {
	$_SESSION['uID']="";
	header("Location: loginForm.php");
}
?>