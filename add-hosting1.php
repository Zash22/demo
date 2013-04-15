<?php
require ("Database.php");
Database::db();
?>

<?php

function hosting($uid,$ptype)
{

    echo "<form action =\"add_hosting.php?uid=$uid&ptype=$ptype\" method=\"post\">";
    echo "Enter in website name: " . "<input type=\"text\" name=\"upname\" value=\" \" />";
    echo "<input type=\"submit\" name=\"submit\" value=\"Submit\" />";

   /* include ("conditions.php");
    exist_domain($uproduct);


    $insert1 = ("INSERT INTO cproduct" . "(uid, upname, ptype)" .
        "VALUES ('$uid', '$uproduct', '$ptype')");

    $insert2 = mysql_query($insert1);

    if(! $insert2 )
    {
        die('Could not enter data: ' . mysql_error());
    }
    echo "Entered data successfully";*/

}
?>

