<?php

$_GET;

$ptype= $_GET['ptype'];
$uid= $_GET['uid'];

echo$ptype;




switch ($ptype)

{
    case "ab":

        include ("add_adsl.php");
        adsl($uid, $ptype);
        break;

    case "as":

        include ("add_adsl.php");
        adsl($uid, $ptype);
        break;

    case "ag":

        include ("add_adsl.php");
        adsl($uid, $ptype);
        break;

    case "au1":

        include ("add_adsl.php");
        adsl($uid, $ptype);
        break;

    case "au2":

        include ("add_adsl.php");
        adsl($uid, $ptype);
        break;

    case "au4":

        include ("add_adsl.php");
        adsl($uid, $ptype);
        break;

    case "lb":

        include ("add-hosting1.php");
        hosting($uid, $ptype);
        break;

    case "ls":

        include ("add-hosting1.php");
        hosting($uid, $ptype);
        break;

    case "lg":

        include ("add-hosting1.php");
        hosting($uid, $ptype);
        break;

    case "wb":
        include ("add-hosting1.php");
        hosting($uid, $ptype);
        break;

    case "ws":

        include ("add-hosting1.php");
        hosting($uid, $ptype);
        break;

    case "wg":

        include ("add-hosting1.php");
        hosting($uid, $ptype);
        break;

    default:
        break;
}

?>