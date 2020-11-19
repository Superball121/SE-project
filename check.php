<?php
session_start();
//set the login mark to empty
$_SESSION['uID'] = "";
?>
<h2>校長審核頁面</h2><hr />
<form method="post" action="sendcheck.php">
審核結果: 
<select>
    <option>同意</option>
    <option>否決</option>
</select>
<br /><br />
<input type="submit">
</form>