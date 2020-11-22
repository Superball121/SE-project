<?php
session_start();
if (! isset($_SESSION['uID'])) {
 header("Location: login.php");
} 
if ($_SESSION['uID']=='principle'){
	$bossMode = 3;
} else if($_SESSION['uID']=='secretary'){
  $bossMode = 2;
}else if($_SESSION['uID']=='teacher'){
  $bossMode = 1;
}else {
	$bossMode=0;
}
require("../model/projectModel.php");

// $id = (int)$_GET['id'];
// $rs = getJobDetail($id);
// if (! $rs) {
//  echo "no data found";
//  exit(0);
// }

$result=getJobList();
$jobStatus = array('未審核','老師已審核','秘書已審核','通過','不通過');


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<p>Application Form !! </p>
<hr />
<!-- <div> -->
<!-- <?php echo $msg; ?> -->
<!-- </div><hr> -->
<a href="login.php">login</a> 
<table width="200" border="1">
  <tr>
    <td>id</td>
	<td>stuID</td>
    <td>name</td>
    <td>mom</td>
    <td>dad</td>
	<td>type</td>
    <td>tDes</td>
	<td>sDes</td>
	<td>result</td>
	<td>status</td>
	<td>-</td>
  </tr>
<?php
if ($bossMode == 0) {
	echo "<a href='todoEditForm.php?id=-1'>申請補助</a>  ";
					
}
while ($rs = mysqli_fetch_assoc($result)){

	echo "<tr><td>" . $rs['id'] . "</td>";
	echo "<td>", htmlspecialchars($rs['name']),"</td>";
	echo "<td>" . $rs['stuID'] . "</td>";
	echo "<td>" , htmlspecialchars($rs['mom']), "</td>";
	echo "<td>" , htmlspecialchars($rs['dad']), "</td>";
	echo "<td>" , htmlspecialchars($rs['type']), "</td>";
	echo "<td>" , htmlspecialchars($rs['tDes']), "</td>" ;
	echo "<td>" , htmlspecialchars($rs['sDes']), "</td>" ;
	echo "<td>" . $rs['result'] . "</td>";

	echo "<td>{$jobStatus[$rs['status']]}</td><td>";
	switch($rs['status']) {
		case 0:
			if ($bossMode == 2) {
                echo "<a href='secOpi.php?id={$rs['id']}'>opinion</a>  ";
                echo "<a href='secResult.php?id={$rs['id']}'>result</a>  ";
			}
			break;
		default:
			break;
	}
	echo "</td></tr>";
}
?>
</table>
</body>
</html>
