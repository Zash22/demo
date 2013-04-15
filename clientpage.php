<?php/*
//create connection, db_connection = database connection
$db_connection = mysql_connect("localhost", "root", "rhmmnikki");

// To test connection
if (!$db_connection)
{
    die("Database connection failed: " . mysql_error());
}

//select database, db = selected database
$db= mysql_select_db("clients" , $db_connection);
// To test connection
if (!$db)
{
    die("Database selection failed: " . mysql_error());
}*/

require ("Database.php");
Database::db();

?>


<html>
<head>
    <title>Manage Client</title>
</head>
<body>
<br />
<br />
<br />
Personal Details:

<br />
<br />
<br />


<?php

            if (isset($_POST['idnumber']))
                {
                    $idnumber = $_POST['idnumber'];
                    //echo $idnumber;
                }

                if (isset($_POST['email']))
                       {
                           $email = $_POST['email'];
                           //echo $email;
                       }

                if (isset($_POST['product_name']))
                       {
                           $product_name = $_POST['product_name'];
                           //echo $product_name;
                       }


                else //not working
                echo "no value was entered";

    ?>


<?php

               if ($idnumber > 0)
                        {
                            $field = "idnumber";
                            $var = $idnumber;

                        }


               else

                        {
                            $field = "email";
                            $var = $email;

                            //echo $field;
                           // echo $var;

                        }






?>


<?php

        echo $field;
        echo $var;
       // echo $uid;

        require_once ("sql.php");

            client_detail ($field,$var);
         //   if(! client_detail ($field,$var))
           // {
            //    echo "fail";
           // }

        //echo $uid . "yes!";


       // $uid = $row["uid"];
        //echo $uid;
      // echo "<a href = \"client_product.php?uid=$uid\">Products</a><br />";

?>





<a href = "client_product.php?uid=<?php echo $uid ?>">Products</a>


      <?php  /*    $result = mysql_query("select * from details where $field = '$var' ", $db_connection);
                // To test result
                if (!$result)
                {
                    die("Database query failed: " . mysql_error());
                }


                //To display the result
                while ($row = mysql_fetch_array ($result))
                {
                    echo "Full name: ".ucfirst($row["firstname"]). " ".ucfirst($row["surname"]). "<br /> ".
                         "Identification #: " . $row ["idnumber"] . "<br />" .
                         "E-mail address: " . $row["email"] . "<br />".
                         "Contact number: " . $row["tel"] . "<br />" .
                         "Address"."<br />" .
                         "Street: " . ($row["num"]). " ".ucfirst($row["street"]). "<br /> ".
                         "Suburb: " . $row ["suburb"] . "<br />" .
                         "Province: " . $row["province"] . "<br />".
                         "Postal code: " . $row["pcode"] . "<br />" . "<br />";

                    echo $uid = $row["uid"];

                }*/
                   /* $result2 = mysql_query("select * from cproduct where $uid = '$uid' ", $db_connection);
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
                        } */

?>







</body>
</html>
<?php


//Database::close(Database::db());
        //close connection
        //mysql_close($db_connection);

?>


<?php       /* to test if connection is closed
             if ($db_connection)
             {
                 echo "Database connection  is still open";
             }
               why is test still saying connection is open? */
 ?>