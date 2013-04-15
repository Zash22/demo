<?php

$_GET;
$uid = $_GET['uid'];
$upname = $_GET ['upname'];




//function cozamail()

//    {
        require_once "Mail.php";

        $from = "MyMojo<mojodomain@localhost>";
        $to = "Pretend Uniforum <zash22@gmail.com>";
        $subject = $upname;

$file = 'update.txt';
$contents = file($file);
$string = implode($contents);
$string;



$body = $string;



        $host = "mail.zash.co.za";
        $username = "nicole@zash.co.za";
        $password = "rhmmnikki1@";

        $headers = array ('From' => $from,
        'To' => $to,
        'Subject' => $subject);
        $smtp = Mail::factory('smtp',
        array ('host' => $host,
        'auth' => true,
        'username' => $username,
        'password' => $password));

        $mail = $smtp->send($to, $headers, $body);

        if (PEAR::isError($mail)) {
        echo("<p>" . $mail->getMessage() . "</p>");
        } else {
        echo("<p>Message successfully sent!</p>");
        echo "<a href=\"client_product.php?uid=$uid\">" . "Return" . "<br />";

            echo "$uid";
            echo "$upname";
        }


?>