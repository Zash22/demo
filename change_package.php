<html>
<body>



<?php
require_once("Database.php");
Database::db();

$_GET;
$upname = $_GET['upname'];
$name = $_GET['name'];
$ptype1 = $_GET['ptype'];
$uid = $_GET ['uid'];

//echo $upname;
//echo $name;

echo "Are you sure you want to change " . $upname . " from " . $name . " to: " . "<br />";

/*if ( ($ptype == 'ab' ||  'as' || 'ab') )//|| ($ptype = "'as') || ($ptype = 'ag') ||($ptype = 'au1') || ($ptype = 'au2') || ($ptype =  'au4'))
    {

       echo
        "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=ab\">" . "ADSL Bronze" . "</a>" . "<br />" .
        "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=as\">" . "ADSL Silver" . "</a>" . "<br />" .
        "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=ag\">" . "ADSL Gold" . "</a>" . "<br />" .
        "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=au1\">" . "ADSL Uncapped 1" . "</a>" . "<br />" .
        "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=au2\">" . "ADSL Uncapped 2" . "</a>" . "<br />" .
        "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=au4\">" . "ADSL Uncapped 4" . "</a>" . "<br />";

    }


if (($ptype = "lb") || ($ptype = "lb") || ($ptype = "lb"))
{
    echo
    "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=lb\">" . "Linux Bronze" . "</a>" . "<br />" .
    "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=ls\">" . "Linux Silver" . "</a>" . "<br />" .
    "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=lg\">" . "Linux Gold" . "</a>" . "<br />";
}

if (($ptype = "wb") ||($ptype = "ws") ||($ptype = "wg"))

{
    echo
    "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=wb\">" . "Windows Bronze" . "</a>" . "<br />" .
    "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=wb\">" . "Windows Bronze" . "</a>" . "<br />" .
    "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=wb\">" . "Windows Bronze" . "</a>" . "<br />";

}*/

//echo "<a href = \"client_product.php?uid=$uid\">" . "Return" . "</a>";






switch ($ptype1)

{
    case "ab":

        echo

            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=as\">" . "ADSL Silver" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=ag\">" . "ADSL Gold" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=au1\">" . "ADSL Uncapped 1" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=au2\">" . "ADSL Uncapped 2" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=au4\">" . "ADSL Uncapped 4" . "</a>" . "<br />";
        break;

    case "as":

        echo
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=ab\">" . "ADSL Bronze" . "</a>" . "<br />" .

            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=ag\">" . "ADSL Gold" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=au1\">" . "ADSL Uncapped 1" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=au2\">" . "ADSL Uncapped 2" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=au4\">" . "ADSL Uncapped 4" . "</a>" . "<br />";
        break;

    case "ag":

        echo
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=ab\">" . "ADSL Bronze" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=as\">" . "ADSL Silver" . "</a>" . "<br />" .

            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=au1\">" . "ADSL Uncapped 1" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=au2\">" . "ADSL Uncapped 2" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=au4\">" . "ADSL Uncapped 4" . "</a>" . "<br />";
        break;

    case "au1":

        echo
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=ab\">" . "ADSL Bronze" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=as\">" . "ADSL Silver" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=ag\">" . "ADSL Gold" . "</a>" . "<br />" .

            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=au2\">" . "ADSL Uncapped 2" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=au4\">" . "ADSL Uncapped 4" . "</a>" . "<br />";

    case "au2":

        echo
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=ab\">" . "ADSL Bronze" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=as\">" . "ADSL Silver" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=ag\">" . "ADSL Gold" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=au1\">" . "ADSL Uncapped 1" . "</a>" . "<br />" .

            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=au4\">" . "ADSL Uncapped 4" . "</a>" . "<br />";
        break;

    case "au4":

        echo
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=ab\">" . "ADSL Bronze" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=as\">" . "ADSL Silver" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=ag\">" . "ADSL Gold" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=au1\">" . "ADSL Uncapped 1" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=au2\">" . "ADSL Uncapped 2" . "</a>" . "<br />" ;

        break;

    case "lb":

        echo

            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=ls\">" . "Linux Silver" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=lg\">" . "Linux Gold" . "</a>" . "<br />";
        break;

    case "ls":
        echo
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=lb\">" . "Linux Bronze" . "</a>" . "<br />" .

            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=lg\">" . "Linux Gold" . "</a>" . "<br />";
        break;

    case "lg":
        echo
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=lb\">" . "Linux Bronze" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=ls\">" . "Linux Silver" . "</a>" . "<br />" ;

        break;

    case "wb":
    {
        echo

            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=ws\">" . "Windows Silver" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=w\">" . "Windows Gold" . "</a>" . "<br />";
        break;

    }


    case "ws":
    {
        echo
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=wb\">" . "Windows Bronze" . "</a>" . "<br />" .

            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=w\">" . "Windows Gold" . "</a>" . "<br />";
        break;

    }

    case "wg":
    {
        echo
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=wb\">" . "Windows Bronze" . "</a>" . "<br />" .
            "<a href= \"change_package_func.php?upname=$upname&uid=$uid&ptype=ws\">" . "Windows Silver" . "</a>" . "<br />" ;

        break;

    }

    default:
        break;
}

echo "<a href = \"client_product.php?uid=$uid\">" . "Cancel change" . "</a>";




/*<input type="button" value="ADSL Gold" onclick=$insert= mysql_query("update `cproduct` set ptype= 'ag' where upname= '$upname' ")>

<input type="button" value="ADSL Uncapped 1" onclick=$insert= mysql_query("update `cproduct` set ptype= 'au1' where upname= '$upname' ")>


<input type="button" value="ADSL Uncapped 2" onclick=mysql_query("update `cproduct` set ptype= 'au2' where upname= '$upname' ")>

<input type="button" value="ADSL Uncapped 4" onclick=mysql_query("update `cproduct` set ptype= 'au4' where upname= '$upname' "); echo "bull";>



<br />*/

?>


</body>
</html>