<?php
require ("Database.php");
Database::db();
?>

<?php

$_GET;

$ptype= $_GET['ptype'];
$uid= $_GET['uid'];

echo$ptype;
echo $uid;





$uproduct = $_POST['upname'];
//$ptype= $_POST['ptype'];
//$uid =$_POST['uid'];

if (isset ($uproduct))
    {
        include ("conditions.php");
        exist_domain($uproduct);


    }



$insert1 = ("INSERT INTO cproduct" . "(uid, upname, ptype)" .
    "VALUES ('$uid', '$uproduct', '$ptype')");

$insert2 = mysql_query($insert1);

if(! $insert2 )
{
    die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully";
echo "<a href= \"client_product.php?uid=$uid\">" . "return" . "<a/>" . "<br />";




?>

