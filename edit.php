<?php
require ("Database.php");
Database::db();
?>
<?php

//function edit($var,$field)
$_GET;
$field = $_GET['field'];
$uid = $_GET['uid'];



echo "<form action=\"update.php?field=$field&uid=$uid\" method = \"post\">" .
    "$field" . "<input type=\"text\" name=\"variable\" value=\" \" />" . "<br />" .
    "<input type=\"submit\" name =\"submit\" value =\"Submit\" /> <br />";





?>

