<?php
require ("Database.php");
Database::db();
?>

<?php

$_GET;

$field= $_GET['field'];
$uid= $_GET['uid'];





$variable = $_POST['variable'];

echo $field;
echo $uid;
echo $variable;


$update_sql = "UPDATE `details` SET `$field` = '$variable' WHERE `uid` = '$uid'";

$update = mysql_query($update_sql);
if (!$update)
{
    die("failed: " . mysql_error() );
}





?>

