<?php
require ("Database.php");
Database::db();
?>


<?php

        /*function ask_details ()
            {
                echo "<form action=\"collect_details.php\" method = \"post\">" .



                "ID number" . "<input type=\"text\" name=\"idnumber\" value=\" \" />" . "<br />" .

                "E-mail" . "<input type=\"text\" name=\"email\" value=\" \" />" . "<br />" .

                "First Name" . "<input type=\"text\" name=\"idnumber\" value=\" \" />" . "<br />" .

                "Surname " . "<input type=\"text\" name=\"surname\" value=\" \" />" . "<br />" .

                "Cellphone Number" . "<input type=\"text\" name=\"tel\" value=\" \" />" . "<br />" .
                "<br />" .

                "Address:" .

                "<br />" .
                "<br />" .

                "Street Number " . "<input type=\"text\" name=\"num\" value=\" \" />" . "<br />" .

                "Street". "<input type=\"text\" name=\"street\" value=\" \" />" . "<br />" .

                "Suburb" . "<input type=\"text\" name=\"suburb\" value=\" \" />" . "<br />" .

                "Province" . "<input type=\"text\" name=\"province\" value=\" \" />" . "<br />" .

                "Postal code" . "<input type=\"text\" name=\"idnumber\" value=\" \" />" . "<br />" .

                "<input type=\"submit\" name =\"submit\" value =\"Submit\" onclick = \" insert()\"/> <br />";



            }*/
$_GET;

$ptype= $_GET['ptype'];

//echo$ptype;




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



//echo $idnumber . " ". $firstname  . " " . $surname . " " . $email . " " . $tel ;


include ("conditions.php");
exist_user($idnumber, $email);

$insert1 = ("INSERT INTO details" . "(idnumber, firstname, surname, email, tel, num, street, suburb, province, pcode)" .
    "VALUES ($idnumber,'$firstname','$surname','$email',$tel, $num, '$street', '$suburb', '$province', $pcode)");

$insert2 = mysql_query($insert1);

if(! $insert2 )
{
    die('Could not enter data: ' . mysql_error());

}
$result = mysql_query("select uid from details where idnumber = $idnumber");
$row = mysql_fetch_array ($result);


global $uid;
$uid = $row["uid"];
//echo $uid;
/*if (!$result)
{
    echo "fail";
}*/
/*while ($row = mysql_fetch_array ($result));
/*if (!$row)
{
    die ("failed: " . mysql_error());
}*/
   /* {
        $uid = $row["uid"];
        echo $uid;
    }*/

//echo $uid;

echo "Thank you." . "<br />" . "Click <a href = \"add_product.php?ptype=$ptype&uid=$uid\">Continue</a>";

?>


<!--echo "<a href = \"add_product.php?ptype=$ptype\">Continue</a>"


/*$result = mysql_query("select * from details where idnumber = '$idnumber' ", $db_connection);
//$row = mysql_fetch_array ($result);


//$uid = $row["uid"];

?>



<?php

/*$ptype= $_POST['ptype'];
echo $ptype;



if ($ptype == "ab" || "as" || "ag" || "au1" || "au2" || "au4")
{

    include ("add_adsl.php");
    adsl($uid, $ptype);
}


    elseif ($ptype != "ab" || "as" || "ag" || "au1" || "au2" || "au4")



{echo "<form action =\"add_hosting.php\" method=\"post\">";
    echo "Enter in website name: " . "<input type=\"text\" name=\"upname\" value=\" \" />" .
         "<input type=\"text\" name=\"uid\" value=\" $uid\" />" .
        "<input type=\"text\" name=\"ptype\" value=\" $ptype \" />" . "<br />" .

        "<input type=\"submit\" name =\"submit\" value =\"Submit\" /> <br />";}

    /*include ("add_hosting.php");
       ask_domain($uid, $ptype);
        echo $ptype;
        echo $uid;

        $uproduct = $_POST['upname'];

        if (!($_POST['upname']))

        {
            echo "fail";
        }
        echo $uproduct;


        include ("conditions.php");
        exist_domain($uproduct);



        $insert1 = ("INSERT INTO cproduct" . "(uid, upname, ptype)" .
            "VALUES ($uid, '$uproduct', '$ptype')");

        $insert2 = mysql_query($insert1);

        if(! $insert2 )
        {
            die('Could not enter data: ' . mysql_error());
        }
        echo "Entered data successfully\n";*/







