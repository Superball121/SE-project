<?php
require_once("dbconnect.php");

function addPro($name,$stuID,$mom,$dad,$type) {
	global $conn;
	$sql = "insert into todo (name,stuID,mom,dad,tDES,sDes,result,status) values ('$name','$stuID', '$mom', '$dad','$type','0,'0',0,0);";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	
}

function cancelJob($jobID) {
}

function updateJob($id,$name,$stuID,$mom,$dad,$type,$tDes,$sDes,$status,$result) {
	global $conn;
	if ($id== -1) {
		addPro($name,$stuID,$mom,$dad,$type);
	} else {
		$sql = "update todo set name='$name', stuID='$stuID', mom='$mom',dad='$dad',type='$type',tDes='$tDes',sDes='$sDes',result='$result',status='$status' where id=$id;";
		mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	}
}

function getJobList($bossMode) {
}

function setFinished($proID) {
}

function rejectJob($proID){
}

function setClosed($proID) {
}


?>