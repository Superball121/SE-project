<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>校長頁面</title>
</head>

<body>
<a href="check.php">前往審核</a><br>
<br />
<table width="200" border="1">
  <tr><td>申請人(學生), name :</td></tr>
  <tr><td>學號, stuID :</td></tr>
  <tr><td>母親姓名, mom :</td></tr>
  <tr><td>父親姓名, dad :</td></tr>
  <tr><td>申請補助種類, type :</td></tr>
  <tr><td>導師訪視說明, tDes :</td></tr>
  <tr><td>秘書審查意見, sDes :</td></tr>
  <tr><td>審核結果, result :</td></tr> 
  <tr><td>校長簽核結果, status :</td></tr>

<?php
while (	$rs=mysqli_fetch_assoc($result)) {
	echo "<tr><td>" . $rs['id'] . "</td>";
	echo "<td>{$rs['name']}</td>";
	echo "<td>" . $rs['stuID'] . "</td>";
	echo "<td>{$rs['mom']}</td>";
	echo "<td>{$rs['dad']}</td>";
	echo "<td>{$rs['type']}</td>";
	echo "<td>{$rs['tDes']}</td>";
	echo "<td>{$rs['sDes']}</td>";
	echo "<td>" . $rs['result'] . "</td>";
	echo "<td>" . $rs['status'] . "</td>";
	echo "</td></tr>";
}
?>
</table>
</body>
</html>
