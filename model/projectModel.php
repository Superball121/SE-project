<?php
require_once("dbconnect.php");

function addPro($name,$stuID,$mom,$dad,$type) {
	// echo $name;
	// echo $stuID;
	// echo $mom;
	// echo $dad;
	// echo $type;
	// addPro($name,$stuID,$mom,$dad,$type);
	global $conn;
	$sql = "insert into project (name,stuID,mom,dad,type,tDES,sDes,result,status) values ('$name','$stuID', '$mom', '$dad','$type',0,0,0,0);";
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

function getJobList() {
	global $conn;
	$sql = "select * from project where 1 order by status;";
	$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
	return $result;
}

function setFinished($proID) {
}

function rejectJob($proID){
}

function setClosed($proID) {
}


?>