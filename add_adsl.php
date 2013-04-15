<?php
require ("Database.php");
Database::db();
?>






<?php


   /*     function hosting($uid, $ptype)
                {
                    "<form action="clientpage.php" method="post">"
                    echo "Enter in website name: " <input type="text" name="uproduct" value=" " />
                    <input type="submit" name ="submit" value ="Submit" /> <br />

                    $uproduct = $_POST['uproduct'];



                    $insert1 = ("INSERT INTO cproducts" . "(uid, uproduct, ptype, sdate )" .
                        "VALUES ($uid, $uproduct, $ptype, $sdate)");

                    $insert2 = mysql_query($insert1);



                } */


        function adsl($uid, $ptype)
                {
                    $db_connection = mysql_connect("localhost", "root", "rhmmnikki");
                    $db= mysql_select_db("clients" , $db_connection);
                    $result = mysql_query("select * from details where uid = $uid");
                    if (!$result)
                    {
                        die("Database query failed: " . mysql_error());
                    }

                    while ($row2 = mysql_fetch_array ($result))

                    //$result = mysql_query("select * from details where uid = '3' ");


                    {$firstname =($row2["firstname"]);
                    $surname = ($row2["surname"]);

                   // echo$firstname;
                  //  echo $surname;

                    $uproduct2 = ("$firstname" . "$surname" . "@adsl");}
                    $i = 1;



                    $result2 = mysql_query("select upname from cproduct");
                    //$row = mysql_fetch_array ($result2);
                    //$uproduct = $row["uproduct"];
                    if (!$result2)
                    {
                        die("Database query failed: " . mysql_error());
                    }



                    while ($row = mysql_fetch_array ($result2))

                       // $uproduct = ($row["upname"]);

                           {
                               $uproduct = ($row["upname"]);
                               if ($uproduct == $uproduct2)

                                 {



                                                $uproduct2 = ("$firstname" . "$surname" . "$i" . "@adsl");
                                                $i++;

                                 }

                           }



                    $insert1 = ("INSERT INTO cproduct" . "(uid, upname, ptype)" .
                         "VALUES ('$uid', '$uproduct2', '$ptype')");
                    $insert2 = mysql_query($insert1);


                    if(! $insert2 )
                        {
                            die('Could not enter data: ' . mysql_error());
                        }

                            echo "Entered data successfully\n";
                            echo "<a href= \"client_product.php?uid=$uid\">" . "return" . "<a/>" . "<br />";

                }

?>

