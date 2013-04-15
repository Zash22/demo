<?php
require ("Database.php");
Database::db();
?>


<html>
<head>
    <title>Signup Form</title>
</head>

<body>


<?php


$_GET;

$ptype= $_GET['ptype'];
//$uid = $_GET ['uid'];

//echo$ptype;
//echo$uid;





//$ptype = $_POST['ptype'];

echo "<form action=\"collect_details.php?ptype=$ptype\" method = \"post\">" .






    "ID number" . "<input type=\"text\" name=\"idnumber\" value=\" \" />" . "<br />" .

    "E-mail" . "<input type=\"text\" name=\"email\" value=\" \" />" . "<br />" .

    "First Name" . "<input type=\"text\" name=\"firstname\" value=\" \" />" . "<br />" .

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

    "Postal code" . "<input type=\"text\" name=\"pcode\" value=\" \" />" . "<br />" .



 //   "<input type=\"text\" name=\"ptype\" value=\" $ptype \" />" . "<br />" .

    "<input type=\"submit\" name =\"submit\" value =\"Submit\" /> <br />";

?>




<!--$idnumber = $_POST['idnumber'];
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

    //$result = mysql_query("select uid from details where idnumber = '$idnumber' ", $db_connection);
   // $row = mysql_fetch_array ($result);


    //$uid = $row["uid"];















/*     <form action="insert_details.php" method = "post">



    ID number <input type="text" name="idnumber" value=" " /> <br />

    E-mail <input type="text" name="email" value=" " /><br />

    First Name <input type="text" name="firstname" value=" " /><br />

    Surname <input type="text" name="surname" value=" " /><br />

    Cellphone Number <input type="text" name="tel" value=" " /><br />
    <br />
    Address <br />
    <br />
    Street Number <input type="text" name="num" value=" " /><br />

    Street<input type="text" name="street" value=" " /><br />

    Suburb <input type="text" name="suburb" value=" " /><br />

    Province <input type="text" name="province" value=" " /><br />

    Postal code <input type="text" name="pcode" value=" " /><br />

    <input type="submit" name ="submit" value ="Submit" /> <br /> -->



<?php   //  echo $idnumber . " ". $firstname  . " " . $surname . " " . $email . " " . $tel ; ?>


<?php






?>