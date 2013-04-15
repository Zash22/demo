<?php

Database::db();
?>

<?php

function client_product ($uid)
{


    Database::db();


//   $_GET;
 //   $uid = $_GET['uid'];
    $result2 = mysql_query("SELECT * FROM cproduct WHERE uid='$uid' ");
    // To test result
    if (!$result2)
    {
        die("Database query failed: " . mysql_error());
    }


    //To display the result
    while ($row2 = mysql_fetch_array ($result2))

    {


        echo "Product: " ;


        global $product;
        $product = $row2["ptype"];
        global $uid
        $uid = $row2["uid"];

        switch ($product)
            {

                case "ab":
                    echo "Product: ADSL Bronze";
                    echo "<br />" .
                    $row2["upname"]. "<br />" .
                    "Signup date: " . $row2["sdate"];

                    global $upname;
                    $upname = $row2["upname"];

                    if (!$row2["cdate"])
                        {
                            echo "<a href=\"cancel.php?upname=$upname&uid=$uid\">" . "Cancel" . "</a>";
                            echo "<a href=\"change_package.php?upname=$upname&name=ADSL Bronze&ptype=product&uid=$uid\">" . "Change Package" . "</a>" . "<br />";

                            //if (!insert)
                        //{
                        //  die("failed: " . mysql_error() );
                        //}
                        }

                    else
                        echo "Cancelled: " . $row2["cdate"] . "<br />". "<br />";


                    echo "<br />";
                    echo "<br />";
                    echo "==============================================================================================" . "<br />";
                    break;

                case "as":
                    echo "Product: ADSL Silver";
                    echo "<br />" .
                    $row2["upname"]. "<br />" .
                    "Signup date: " . $row2["sdate"];

                    global $upname;
                    $upname = $row2["upname"];

                    if (!$row2["cdate"])
                        {

                            echo "<a href=\"cancel.php?upname=$upname&uid=$uid\">" . "Cancel" . "</a>";
                            echo "<a href=\"change_package.php?upname=$upname&name=ADSL Silver&ptype=$ptype&uid=$uid\">" . "Change Package" . "</a>" . "<br />";
                        //if (!insert)
                        //{
                        //  die("failed: " . mysql_error() );
                        //}
                        }

                    else
                        echo "Cancelled: " . $row2["cdate"] . "<br />" . "<br />";


                    //echo "end";

                    // "<input type = "\button"\ value = "\cancel"\ onclick = "\mysql_query()"\ >" .
                    echo "<br />";
                    echo "<br />";
                    echo "==============================================================================================" . "<br />";

                   break;

                case "ag":
                    echo "Product: ADSL Gold";
                    echo "<br />" .
                    $row2["upname"]. "<br />" .
                    "Signup date: " . $row2["sdate"];

                    global $upname;
                    $upname = $row2["upname"];

                    if (!$row2["cdate"])
                        {
                            echo "<a href=\"cancel.php?upname=$upname&uid=$uid\">" . "Cancel" . "</a>";
                            echo "<a href=\"change_package.php?upname=$upname&name=ADSL Gold&ptype=$ptype&uid=$uid\">" . "Change Package" . "</a>" . "<br />";
                        //if (!insert)
                        //{
                        //  die("failed: " . mysql_error() );
                        }

                    else
                        echo "Cancelled: " . $row2["cdate"];



                    echo "<br />";



                    //echo "end";

                    // "<input type = "\button"\ value = "\cancel"\ onclick = "\mysql_query()"\ >" .
                    echo "<br />";
                    echo "<br />";
                    echo "==============================================================================================" . "<br />";
                   break;

                case "au1":
                    echo "Product: ADSL Uncapped 1";echo "<br />" .
                    $row2["upname"]. "<br />" .
                    "Signup date: " . $row2["sdate"];
                    global $upname;
                    $upname = $row2["upname"];

                    if (!$row2["cdate"])
                    {

                        echo "<a href=\"cancel.php?upname=$upname&uid=$uid\">" . "Cancel" . "</a>";
                        echo "<a href=\"change_package.php?upname=$upname&name=ADSL Uncapped 1&ptype=$ptype&uid=$uid\">" . "Change Package" . "</a>" . "<br />";


                        //{
                        //  die("failed: " . mysql_error() );
                        //}


                    }

                    else
                        echo "Cancelled: " . $row2["cdate"] . "<br />" . "<br />" ;


                    //echo "end";

                    // "<input type = "\button"\ value = "\cancel"\ onclick = "\mysql_query()"\ >" .
                    echo "<br />";
                    echo "<br />";
                    echo "==============================================================================================" . "<br />";
                  break;

                case "au2":
                    echo "Product: ADSL Uncapped 2";
                    echo "<br />" .
                    $row2["upname"]. "<br />" .
                    "Signup date: " . $row2["sdate"];

                    global $upname;
                    $upname = $row2["upname"];

                    if (!$row2["cdate"])
                        {
                            echo "<a href=\"cancel.php?upname=$upname&uid=$uid\">" . "Cancel" . "</a>";
                            echo "<a href=\"change_package.php?upname=$upname&name=ADSL Uncapped 2&ptype=$ptype&uid=$uid\">" . "Change Package" . "</a>" . "<br />";

                            //if (!insert)
                        //{
                        //  die("failed: " . mysql_error() );
                        //}
                        }

                    else
                        echo "Cancelled: " . $row2["cdate"] . "<br />" . "<br />" ;



                    //echo "end";

                    // "<input type = "\button"\ value = "\cancel"\ onclick = "\mysql_query()"\ >" .
                    echo "<br />";
                    echo "<br />";
                    echo "==============================================================================================" . "<br />";
                    break;

                case "au4":
                    echo "Product: ADSL Uncapped 4";
                    echo "<br />" .
                    $row2["upname"]. "<br />" .
                    "Signup date: " . $row2["sdate"];
                    global $upname;
                    $upname = $row2["upname"];

                    if (!$row2["cdate"])
                        {

                            echo "<a href=\"cancel.php?upname=$upname&uid=$uid\">" . "Cancel" . "</a>";

                            echo "<br />";

                            echo "<a href=\"change_package.php?upname=$upname&name=ADSL Uncapped 4&ptype=$ptype&uid=$uid\">" . "Change Package" . "</a>" . "<br />";



                            //if (!insert)
                        //{
                        //  die("failed: " . mysql_error() );
                        }

                    else
                        echo "Cancelled: " . $row2["cdate"] . "<br />" . "</br>";





                    //echo "end";

                    // "<input type = "\button"\ value = "\cancel"\ onclick = "\mysql_query()"\ >" .
                    echo "<br />";
                    echo "<br />";
                    echo "==============================================================================================" . "<br />";
                    break;

                case "lb":
                    echo "Product: Linux Bronze";
                    echo "<br />" .
                        $row2["upname"]. "<br />" .
                        "Signup date: " . $row2["sdate"];
                    global $upname;
                    $upname = $row2["upname"];

                    if (!$row2["cdate"])
                    {

                        echo "<a href=\"cancel.php?upname=$upname&uid=$uid\">" . "Cancel" . "</a>";
                        echo "<a href=\"change_package.php?upname=$upname&name=Linux Bronze&ptype=$ptype&uid=$uid\">" . "Change Package" . "</a>" . "<br />";
                        echo "<a href=\"coza_update.php?upname=$upname&uid=$uid\">" . "co.za update" . "</a>";
                        //if (!insert)
                        //{
                        //  die("failed: " . mysql_error() );
                        //}
                    }

                    else
                        echo "Cancelled: " . $row2["cdate"] . "<br />" ."<br />" ;


                     echo "<a href=\"http://co.za/cgi-bin/whois.sh?Domain=$upname&Enter=Enter\">"."Whois.co.za"."</a>";


                    //echo "end";

                    // "<input type = "\button"\ value = "\cancel"\ onclick = "\mysql_query()"\ >" .
                    echo "<br />";
                    echo "<br />";
                    echo "==============================================================================================" . "<br />";
                    break;

                case "ls":
                    echo "Product: Linux Silver";
                    echo "<br />" .
                        $row2["upname"]. "<br />" .
                        "Signup date: " . $row2["sdate"];
                    global $upname;
                    $upname = $row2["upname"];

                    if (!$row2["cdate"])
                    {

                        echo "<a href=\"cancel.php?upname=$upname&uid=$uid\">" . "Cancel" . "</a>";
                        echo "<a href=\"change_package.php?upname=$upname&name=Linux Silver&ptype=$ptype&uid=$uid\">" . "Change Package" . "</a>" . "<br />";
                        echo "<a href=\"coza_update.php?upname=$upname&uid=$uid\">" . "co.za update" . "</a>";
//if (!insert)               echo "<a href=\"coza_update.php?upname=$upname&uid=$uid\">" . "co.za update" . "</a>";
                        //{
                        //  die("failed: " . mysql_error() );
                        //}


                    }

                    else
                        echo "Cancelled: " . $row2["cdate"];

                    echo "<a href=\"http://co.za/cgi-bin/whois.sh?Domain=$upname&Enter=Enter\">"."Whois.co.za"."</a>";


                    //echo "end";

                    // "<input type = "\button"\ value = "\cancel"\ onclick = "\mysql_query()"\ >" .
                    echo "<br />";
                    echo "<br />";
                    echo "==============================================================================================" . "<br />";
                    break;
                case "lg":
                    echo "Product: Linux Gold";
                    echo "<br />" .
                        $row2["upname"]. "<br />" .
                        "Signup date: " . $row2["sdate"];
                    global $upname;
                    $upname = $row2["upname"];

                    if (!$row2["cdate"])
                    {

                        echo "<a href=\"cancel.php?upname=$upname&uid=$uid\">" . "Cancel" . "</a>";
                        echo "<a href=\"change_package.php?upname=$upname&name=Linux Gold&ptype=$ptype&uid=$uid\">" . "Change Package" . "</a>" . "<br />";
                        echo "<a href=\"coza_update.php?upname=$upname&uid=$uid\">" . "co.za update" . "</a>";
                        //if (!insert)
                        //{
                        //  die("failed: " . mysql_error() );
                        //}


                    }

                    else
                        echo "Cancelled: " . $row2["cdate"];

                    echo "<br />";
                    echo "<br />";



                    echo "<a href=\"http://co.za/cgi-bin/whois.sh?Domain=$upname&Enter=Enter\">"."Whois.co.za"."</a>";


                    //echo "end";

                    // "<input type = "\button"\ value = "\cancel"\ onclick = "\mysql_query()"\ >" .
                    echo "<br />";
                    echo "<br />";
                    echo "==============================================================================================" . "<br />";
                    break;

                case "wb":
                   echo "Product: Windows Bronze";
                    echo "<br />" .
                        $row2["upname"]. "<br />" .
                        "Signup date: " . $row2["sdate"];
                    global $upname;
                    $upname = $row2["upname"];

                    if (!$row2["cdate"])
                    {

                        echo "<a href=\"cancel.php?upname=$upname&uid=$uid\">" . "Cancel" . "</a>";
                        echo "<a href=\"change_package.php?upname=$upname&name=Windows Bronze&ptype=$ptype&uid=$uid\">" . "Change Package" . "</a>" . "<br />";
                        echo "<a href=\"coza_update.php?upname=$upname&uid=$uid\">" . "co.za update" . "</a>";


//if (!insert)


                        //{
                        //  die("failed: " . mysql_error() );
                        //}


                    }

                    else
                        echo "Cancelled: " . $row2["cdate"];

                    echo "<br />";
                    echo "<br />";


                    echo "<a href=\"http://co.za/cgi-bin/whois.sh?Domain=$upname&Enter=Enter\">"."Whois.co.za"."</a>";


                    //echo "end";

                    // "<input type = "\button"\ value = "\cancel"\ onclick = "\mysql_query()"\ >" .
                    echo "<br />";
                    echo "<br />";
                    echo "==============================================================================================" . "<br />";
                   break;

                case "ws":
                    echo "Product: Windows Silver";
                    echo "<br />" .
                        $row2["upname"]. "<br />" .
                        "Signup date: " . $row2["sdate"];
                    global $upname;
                    $upname = $row2["upname"];

                    if (!$row2["cdate"])
                    {

                        echo "<a href=\"cancel.php?upname=$upname&uid=$uid\">" . "Cancel" . "</a>";
                        echo "<a href=\"change_package.php?upname=$upname&name=Windows Silver&ptype=$ptype&uid=$uid\">" . "Change Package" . "</a>" . "<br />";
                        echo "<a href=\"coza_update.php?upname=$upname&uid=$uid\">" . "co.za update" . "</a>";

//if (!insert)
                        //if (!insert)
                        //{
                        //  die("failed: " . mysql_error() );
                        //}


                    }

                    else
                        echo "Cancelled: " . $row2["cdate"];

                    echo "<br />";
                    echo "<br />";



                    echo "<a href=\"http://co.za/cgi-bin/whois.sh?Domain=$upname&Enter=Enter\">"."Whois.co.za"."</a>";


                    //echo "end";

                    // "<input type = "\button"\ value = "\cancel"\ onclick = "\mysql_query()"\ >" .
                    echo "<br />";
                    echo "<br />";
                    echo "==============================================================================================" . "<br />";
                    break;

                case "wg":
                    echo "Product: Windows Gold";
                    echo "<br />" .
                        $row2["upname"]. "<br />" .
                        "Signup date: " . $row2["sdate"];
                    global $upname;
                    $upname = $row2["upname"];

                    if (!$row2["cdate"])
                    {

                        echo "<a href=\"cancel.php?upname=$upname&uid=$uid\">" . "Cancel" . "</a>";
                        echo "<a href=\"change_package.php?upname=$upname&name=Windows Gold&ptype=$ptype&uid=$uid\">" . "Change Package" . "</a>" . "<br />";
                        echo "<a href=\"coza_update.php?upname=$upname&uid=$uid\">" . "co.za update" . "</a>";


                    }

//if (!insert)
                        //if (!insert)
                        //{
                        //  die("failed: " . mysql_error() );
                        //}





                    else
                        echo "Cancelled: " . $row2["cdate"];

                    echo "<br />";
                    echo "<br />";

                        echo "<a href=\"http://co.za/cgi-bin/whois.sh?Domain=$upname&Enter=Enter\">"."Whois.co.za"."</a>";


                    //echo "end";

                    // "<input type = "\button"\ value = "\cancel"\ onclick = "\mysql_query()"\ >" .
                    echo "<br />";
                    echo "<br />";
                    echo "==============================================================================================" . "<br />";
                    break;

                default:
                    break;

            }






        }




      /*  echo "<br />" .
            $row2["upname"]. "<br />" .
            "Signup date: " . $row2["sdate"];
            global $upname;
            $upname = $row2["upname"];

            if (!$row2["cdate"])
                {

                   echo "<input type=\"button\" value=\"cancel\"
                  onClick=\" mysql_query(\"UPDATE `cproduct` SET `cdate` = now() WHERE (`uid` =\'$uid\' && `upname` = \'$upname\')\");\" ";

                    //if (!insert)
                    //{
                      //  die("failed: " . mysql_error() );
                    //}


                }

            else
                echo "Cancelled: " . $row2["cdate"];

        //echo "end";

            // "<input type = "\button"\ value = "\cancel"\ onclick = "\mysql_query()"\ >" .
           echo "<br />";
           echo "<br />";


        //$uid = $row["uid"];*/



}




?>