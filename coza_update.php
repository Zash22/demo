<?php

require_once("Database.php");
Database::db();


$_GET;

$uid = $_GET['uid'];

$upname = $_GET['upname'];

$sql = "select * from details where `uid` = $uid";

$sqlquery = (mysql_query($sql));

if (!$sqlquery)
{
    die("Database query failed: " . mysql_error());
}



while ($row = mysql_fetch_array ($sqlquery))
{
   // global $uid;
   // $uid = $row["uid"];
  //  $firstname = $row["firstname"];
  //  $surname =   $row["surname"];
 //   $idnumber =    $row ["idnumber"];
    $email = $row["email"];

    $tel =    $row["tel"];

}


if (!$row)
{
    echo "<a href =\"edit_update.php?upname=$upname&email=$email&tel=$tel&uid=$uid\">" . "continue" . "</a>";
}
  //  $num=$row["num"];
 //   $street =   $row["street"];
  //  $suburb =       $row ["suburb"];
   // $province =       $row["province"];
 //   $pcode =     $row["pcode"];










    ?>