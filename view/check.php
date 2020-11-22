<?php
session_start();
require("../Model/dbconnect.php");
//set the login mark to empty
$_SESSION['uID'] = "";
?>
<h2>校長審核頁面</h2><hr />
<form method="post" action="sendcheck.php">
    Student id: <input name="id" type="text" id="id" /> <br>	
	審核結果:
    <select name="status" type="select" id="status" />
        <option value="3">同意</option>
        <option value="4">否決</option>
    </select>
    <br /><br />
    <input type="Submit" name="Submit" value="送出" />
</form>