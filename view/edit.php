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

$id = (int)$_GET['id'];
$rs = getJobList();
if (! $rs) {
 echo "no data found";
 exit(0);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
<h1>老師審核</h1>
<form method="post" action="../control/uodaControl.php">
   <input type='hidden' name='id' value='<?php echo $id ?>'>
   stuid: <input name="stuID" type="hidden" id="stuID" value="<?php echo $rs['stuID'] ?>" /><?php echo $rs['stuID'] ?><br>

      name: <input name="name" type="hidden" id="name" value="<?php echo $rs['name'] ?>" /><?php echo $rs['name'] ?> <br>

      mom: <input name="mom" type="hidden" id="mom" value="<?php echo $rs['parent'] ?>" /><?php echo $rs['mom'] ?> <br>
      dad: <input name="dad" type="hidden" id="dad" value="<?php echo $rs['dad'] ?>" /><?php echo $rs['dad'] ?> <br>

   type: <input  name="type" type="hidden" id="type" value="<?php echo $rs['type'] ?>"/> <?php echo $rs['type'] ?><br>
   <!-- opinion-tec: <input name="tDes" type="text" id="men" value="<?php echo htmlspecialchars($rs['tDes']);?>" /> <br> -->
<?php
	switch($bossMode) {
    case 1:
      echo  "opinion-tec:<textarea name='tDes' id='tDes' type='text' value='htmlspecialchars($rs['tDes'])'/>echo $rs['tDes'] </<textarea><br>"
			}
			break;
		case 2;
			if ($bossMode == 2) {
        echo  "opinion-tec:<textarea name='tDes' id='tDes' type='hiddden' value='htmlspecialchars($rs['tDes'])'/>echo $rs['tDes'] </textarea><br>"
				echo  "opinion-sec:<input name='result' id='result' type='text' value='htmlspecialchars($rs['result'])'/>echo $rs['result']<br>"
				echo  "opinion-sec:<textarea name='sDes' id='sDes' type='text' value='htmlspecialchars($rs['sDes'])'/>echo $rs['sDes'] </textarea><br>"
			}
			break;
		case 2:
			if($bossMode == 3){
			echo "<a href='todoSetControl.php?act=close&id={$rs['id']}'>yes</a>  " ;
			echo "<a href='todoSetControl.php?act=cancel&id={$rs['id']}'>no</a>  " ;
			}
			break;
		default:
			break;
	}
?>



   <br>

      <input type="submit" name="Submit" value="送出" />
 </form>
  </tr>
</table>
</body>
</html>
