<?php
session_start();
require("../model/dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
<h1>申請表單</h1>
<form method="post" action="../control/updaControl.php">
      <input type='hidden' name='id' value='<?php echo $id ?>'>
      <input type='hidden' name='status' value='<?php echo $status ?>'>
      <input type='hidden' name='result' value='<?php echo $result ?>'>
      姓名: <input name="name" type="text" id="name" /> <br>
      學號: <input name="stuID" type="text" id="stuID" /> <br>
      母親: <input name="mom" type="text" id="mom" /> <br>
      父親: <input name="dad" type="text" id="dad" /> <br>
	    申請種類: <select  name="type" type="select" id="type" > 
					<option value='低收入戶'>低收入戶</option>
					<option value='中低收入戶'>中低收入戶</option>
					<option value='家庭突發因素'>家庭突發因素</option>
					</select>
	  <br>
    導師訪視內容：<textarea name="tDes" id="tDes"></textarea><br>
    秘書審核內容：<textarea name="sDes" id="sDes"></textarea><br>
      <input type="submit" name="Submit" value="送出" />
	</form>
  </tr>
</table>
</body>
</html>
