<!--search or signup page-->

<html>
<head>
    <title>
        Search
    </title>
</head>
<body>

<?php /*$date = mysql_query(SELECT * FROM myTable WHERE DATE(myDate) = DATE(NOW());

        //date('Format String',time());
        echo $date;*/

?>
<br />
<br />
<br />
<br />

Existing client? Search for your profile. Only submit one field at a time please!
<br />
<br />
<br />
<br />



    <form action="clientpage.php" method="post">

    ID number <input type=NULL name="idnumber" value="" />
    <input type="submit" name ="submit" value ="Submit" /> <br />

    <form action="clientpage.php" method="post">
    E-mail Address<input type=NULL name="email" value="" />
    <input type="submit" name ="submit" value ="Submit" /> <br />

    <form action="clientpage.php" method="post">
    Product name <input type=NULL name="product_name" value="" />
    <input type="submit" name ="submit" value ="Submit" /> <br />



    <br />
    <br />
    <br />
    <br />

    New client? Want to sign up? Choose your package, follow the links until you get to the sign up page!

    <br />
    <br />
    <br />
    <br />

What product are you interested in?
    <br />
    <br />

<a href = "adsl.php" > ADSL </a>

    <br />
    <br />

<a href = "linux.php"> Linux Shared hosting </a>

    <br />
    <br />

<a href = "windows.php"> Windows Shared hosting </a> <br />



    <a href = "mail.php">mail</a> <br />

    <a href = "send_ notifications.php">mail</a>


</body>
</html>