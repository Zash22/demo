<?php
require ("Database.php");
Database::db();
?>


<html>
<body>


<?php
//$db= mysql_select_db("clients" , $db_connection);

//$insert1 = ("INSERT INTO details" . "(idnumber, email, firstname, surname, tel)" . "VALUES ($idnumber,$firstname,$surname,$email,$tel)");

//$insert2 = mysql_query($insert1);


function insert()

{

$idnumber = $_POST['idnumber'];
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$num = $_POST['num'];
$street = $_POST['street'];
$suburb = $_POST['suburb'];
$province = $_POST['province'];
$pcode = $_POST['pcode'];



    echo $idnumber . " ". $firstname  . " " . $surname . " " . $email . " " . $tel ;


include ("conditions.php");
exist_user($idnumber, $email);

$insert1 = ("INSERT INTO details" . "(idnumber, firstname, surname, email, tel, num, street, suburb, province, pcode)" .
            "VALUES ($idnumber,'$firstname','$surname','$email',$tel, $num, '$street', '$suburb', '$province', $pcode)");

$insert2 = mysql_query($insert1);

/*if(! $insert2 )
{
    die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n"; */

  $result = mysql_query("select uid from details where idnumber = '$idnumber' ", $db_connection);
  $row = mysql_fetch_array ($result);


  $uid = $row["uid"];

}

?>


<?php

        $ptype = "as";

        echo $uid;

        if ($ptype == "ab" || "as" || "ag" || "au1" || "au2" || "au4")
            {

                include ("add_adsl.php");
                adsl($uid, $ptype);

            }

        if ($ptype != "ab" || "as" || "ag" || "au1" || "au2" || "au4")

            {

                echo "<form action =\"add_hosting.php\" method=\"post\">";
                echo "Enter in website name: " . "<input type=\"text\" name=\"upname\" value=\" \" />" .
                    "<input type=\"submit\" name =\"submit\" value =\"Submit\" /> <br />";

                //hosting ($uid, $ptype);

                //include ("add_hosting.php");
                //ask_domain ($uid, $ptype);
                //echo $uproduct;

            }
?>










