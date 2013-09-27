<?php

        function exist_user($idnumber, $email)
         {

             $result = mysql_query("SELECT * from details");

             if (!$result)
             {
                 die("Database query failed: " . mysql_error());
             }

             while ($row2 = mysql_fetch_array ($result))
              {
                 $idnumber2 =($row2["idnumber"]);
                 $email2 = ($row2["email"]);

                 // echo$idnumber2;
                 // echo$email;

                 if ($idnumber == $idnumber2 || $email2 == $email)
                    {
                        echo "Please return to sign up page, this user already exists";
                        die;
                    }
              }





              }


        function exist_domain($uproduct)
            {
                $result = mysql_query("SELECT * from cproduct");
                if (!$result)
                {
                    die("Database query failed: " . mysql_error());
                }

                while ($row2 = mysql_fetch_array ($result))
                {
                    $uproduct2 =($row2["upname"]);


                    // echo $uproduct;


                    if ($uproduct == $uproduct2)
                    {
                        echo "Please return to sign up page, this user already exists";
                        die;
                    }
                 }

            }


?>