<?php
session_start();
if (! isset($_SESSION['uID']) or $_SESSION['uID']<="") {
	header("Location: loginForm.php");
} 
if ($_SESSION['uID']=='principle'){
	$bossMode = 1;
} else if($_SESSION['uID']=='secretary'){
  $bossMode = 2;
}else if($_SESSION['uID']=='teacher'){
  $bossMode = 3;
}else {
	$bossMode=4;
}
require("../model/projectModel.php");
// require("../model/dbconnect.php");
// $sql = "select * from project where 1;";
// $result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");

if (isset($_GET['m'])){
	$msg="<font color='red'>" . $_GET['m'] . "</font>";
} else {
	$msg="Good morning";
}



$result=getJobList();
$jobStatus = array('已申請','老師審核完成','秘書審核完成','審核通過','未審核通過');


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<p style="font-weight:bolder">補助申請</p>
<hr />
<div><?php echo $msg;echo $bossMode; ?></div><hr>
<?php
 echo "<a href='login.php'>login</a> | <a href='addForm.php?bossmodel={$bossMode}'>Application</a> <br>"
?>
<table width="200" border="1">
  <tr>
    <td>Name</td>
    <td>學號</td>
    <td>種類</td>
	  <td>申請狀態</td>
  </tr>
<?php

while (	$rs=mysqli_fetch_assoc($result)) {
	// echo "<tr style='background-color:$bgColor;'><td>" . $rs['id'] . "</td>";
  echo "<td>{$rs['name']}</td>";
  echo "<td>{$rs['stuID']}</td>";
  echo "<td>{$rs['type']}</td>";
	echo "<td>{$jobStatus[$rs['status']]}</td>" ;
	// switch($rs['status']) {
	// 	case 0:
	// 		if ($bossMode) {
	// 			echo "<a href='todoEditForm.php?id={$rs['id']}'>Edit</a>  ";	
	// 			echo "<a href='todoSetControl.php?act=cancel&id={$rs['id']}'>Cancel</a>  " ;
	// 		} else {
	// 			echo "<a href='todoSetControl.php?act=finish&id={$rs['id']}'>Finish</a>  ";
	// 		}

	// 		break;
	// 	case 1:
	// 		echo "<a href='todoSetControl.php?act=reject&id={$rs['id']}'>Reject</a>  ";
	// 		echo "<a href='todoSetControl.php?act=close&id={$rs['id']}'>Close</a>  ";
	// 		break;
	// 	default:
	// 		break;
	// }
	echo "</td></tr>";
}
?>
</table>
</body>
</html>
