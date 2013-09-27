<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nicole
 * Date: 14/04/13
 * Time: 06:45
 * To change this template use File | Settings | File Templates.
 */

//$db_connection = mysql_connect("localhost", "root", "rhmmnikki");
//global $db;
//$db = mysql_select_db("clients" , $db_connection);


class Database {

        //$db_connection = mysql_connect("localhost", "root", "rhmmnikki");
      //  $db = mysql_select_db("clients" , $db_connection);




        function db() //open db connection and select db

            {
                //create connection, db_connection = database connection
                global $db_connection;
                $db_connection = mysql_connect("localhost", "root", "rhmmnikki");
                // To test connection
                if (!$db_connection)
                {
                    die("Database connection failed: " . mysql_error());
                }

                //select database, db = selected database
                global $db;
                $db= mysql_select_db("clients" , $db_connection);
                // To test connection
                if (!$db)
                {
                    die("Database selection failed: " . mysql_error());
                }

            }

      /*  function close($db)
            {

                 //$db= mysql_select_db("clients" , $db_connection);

               // $db_connection = mysql_connect("localhost", "root", "rhmmnikki");
                //$db= mysql_select_db("clients" , $db_connection);

                mysql_close($db);
            }
*/

}