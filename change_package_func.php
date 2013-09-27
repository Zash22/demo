<?php

include ("Database.php");
Database::db();


$_GET;

$upname = $_GET ['upname'];
$ptype3 = $_GET ['ptype'];
$uid = $_GET ['uid'];

$sql = "update cproduct set ptype = '$ptype3' where upname = '$upname'";

$result = (mysql_query($sql));

if(!$result)
    {
        die("Failed: " . mysql_error());
    }

else
    echo "$upname" . " changed to " . "$ptype3" . "<br />";


echo "<a href = \"client_product.php?uid=$uid\">" . "Return" . "</a>";


?>