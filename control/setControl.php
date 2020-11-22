<?php
require("../model/projectModel.php");

$msgID=(int)$_GET['id'];
$act =$_GET['act'];
$msg = "Message:$msgID, Action: $act completed.";
if ($msgID>0) {
	switch($act) {
		case 'finish':
			setFinished($msgID);
			break;
		case 'secfinish':
			setSecFinished($msgID);
			break;
		case 'close':
			setClosed($msgID);
			break;
		case 'cancel':
			cancelJob($msgID);
			break;
		default:
			$msg="Invalid action. Ignored.";
			break;
	}
}
header("Location: ../view/teaView.php?m=$msg");
?>