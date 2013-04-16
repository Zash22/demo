<?php

require_once ("Database.php");
Database::db();


$_GET;
$upname = $_GET['upname'];
$uid = $_GET['uid'];


     $sql = "UPDATE `cproduct` SET `cdate` = now() WHERE `upname` = '$upname' ";
        $insert = mysql_query($sql);

        if (!$insert)
            {
                die("Unable to cancel: " . mysql_error());
            }

        else
            echo $upname . " is cancelled." . " <br />" . "<a href = \"client_product.php?uid=$uid\">" . "Return" . "</a>";


?>