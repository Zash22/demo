<?php
require ("Database.php");

?>









<?php

function client_detail ($field, $var)
    {
        Database::db();

        $result = mysql_query("select * from details where $field = '$var' "/*$db*/);
        // To test result
        if (!$result)
        {
            die("Database query failed: " . mysql_error());
        }



   /*     $firstname = $row["firstname"];
        $surname =   $row["surname"];
        $idnumber =    $row ["idnumber"];
        $email = $row["email"];

        $tel =    $row["tel"];

        $num=$row["num"];
        $street =   $row["street"];
        $suburb =       $row ["suburb"];
        $province =       $row["province"];
        $pcode =     $row["pcode"]; */

        //To display the result
        while ($row = mysql_fetch_array ($result))
        {
            global $uid;
            $uid = $row["uid"];
            $firstname = $row["firstname"];
            $surname =   $row["surname"];
            $idnumber =    $row ["idnumber"];
            $email = $row["email"];

            $tel =    $row["tel"];

            $num=$row["num"];
            $street =   $row["street"];
            $suburb =       $row ["suburb"];
            $province =       $row["province"];
            $pcode =     $row["pcode"];


            echo "Full name: ".ucfirst($row["firstname"]).
                "<input type=\"button\" value=\"edit\" onClick=\"window.open('edit.php?field=firstname&uid=$uid')\">" ."<br />" .

                "Last name: " .ucfirst($row["surname"]).
                "<input type=\"button\" value=\"edit\" onClick=\"window.open('edit.php?field=surname&uid=$uid')\">" ."<br />" .

                "Identification #: " . $row ["idnumber"] .
                "<input type=\"button\" value=\"edit\" onClick=\"window.open('edit.php?field=idnumber&uid=$uid')\">" ."<br />" .

                "E-mail address: " . $row["email"] .
                "<input type=\"button\" value=\"edit\" onClick=\"window.open('edit.php?field=email&uid=$uid')\">" ."<br />" .

                "Contact number: " . $row["tel"] .
                "<input type=\"button\" value=\"edit\" onClick=\"window.open('edit.php?field=tel&uid=$uid')\">" ."<br />" .

                "Address"."<br />" .

                "Street #: " . ($row["num"]) .
                "<input type=\"button\" value=\"edit\" onClick=\"window.open('edit.php?field=num&uid=$uid')\">" ."<br />" .

                "Street: " .ucfirst($row["street"]).
                "<input type=\"button\" value=\"edit\" onClick=\"window.open('edit.php?field=street&uid=$uid')\">" ."<br />" .

                "Suburb: " . $row ["suburb"] .
                "<input type=\"button\" value=\"edit\" onClick=\"window.open('edit.php?field=suburb&uid=$uid')\">" ."<br />" .

                "Province: " . $row["province"] .
                "<input type=\"button\" value=\"edit\" onClick=\"window.open('edit.php?field=province&uid=$uid')\">" ."<br />" .

                "Postal code: " . $row["pcode"] .
                "<input type=\"button\" value=\"edit\" onClick=\"window.open('edit.php?field=pcode&uid=$uid')\">" ."<br />";        // global $uid;
       //  $uid = $row["uid"];
         //return $uid;



       //     echo $uid;

        }

    }


?>

<?php

function client_product ($uid)
    {
        $result2 = mysql_query("select * from cproduct where $uid = '$uid' ", $db_connection);
        // To test result
        if (!$result2)
        {
            die("Database query failed: " . mysql_error());
        }


        //To display the result
        while ($row2 = mysql_fetch_array ($result2))
        {
            echo "Product: " . $row2["upname"]. "<br />" .
                "Signup date: " . $row2["sdate"]. "  " . "Cancelled: " . $row2["cdate"]. "<br />" .
                // "<input type = "\button"\ value = "\cancel"\ onclick = "\mysql_query()"\ >" .
                "<br />";


            //$uid = $row["uid"];
        }

    }

?>

<?php

//Database::close();
?>











