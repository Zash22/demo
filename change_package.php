<html>
<body>



<?php
require_once("Database.php");
Database::db();

$_GET;
$upname = $_GET['upname'];
$name = $_GET['name'];

//echo $upname;
//echo $name;

echo "Are you sure you want to change " . $upname . " from " . $name . " to: " . "<br />";




echo "<br />";


echo


"<input type=\"button\" value=\"ADSL Bronze\" onclick= \"open.window(\"index.php\")\" >" . "<br .>" .



"<input type=\"button\" value=\"ADSL Silver\" action = \"Submit\" onclick=\"mysql_query(\"update cproduct set ptype= 'as' where upname= $upname \")\">";


if (!mysql_query("update cproduct set ptype= 'as' where upname= $upname"))
{

    die ("fail " . mysql_error());
}

/*<input type="button" value="ADSL Gold" onclick=$insert= mysql_query("update `cproduct` set ptype= 'ag' where upname= '$upname' ")>

<input type="button" value="ADSL Uncapped 1" onclick=$insert= mysql_query("update `cproduct` set ptype= 'au1' where upname= '$upname' ")>


<input type="button" value="ADSL Uncapped 2" onclick=mysql_query("update `cproduct` set ptype= 'au2' where upname= '$upname' ")>

<input type="button" value="ADSL Uncapped 4" onclick=mysql_query("update `cproduct` set ptype= 'au4' where upname= '$upname' "); echo "bull";>



<br />*/

?>


</body>
</html>