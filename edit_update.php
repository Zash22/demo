<?php

$_GET;

$email = $_GET['email'];
$upname = $_GET['upname'];
$tel = $_GET['tel'];
$uid = $_GET['uid'];


echo $email . "<br />" . $upname . "<br />" . $tel;

$filename = "template.txt";
$filename2 = "update.txt";
$fp = fopen($filename, 'a');


$contents = file_get_contents($filename);

$new_contents = str_replace('genericdomain', $upname, $contents);
file_put_contents($filename2, $new_contents);

//fclose($fp);









/*$filename = "template.txt";
$filename2 = "update.txt";
$fp = fopen($filename, 'a');


$contents = file_get_contents($filename);*/
$contents = file_get_contents($filename2);

$new_contents = str_replace('genericmail', $email, $contents);
file_put_contents($filename2, $new_contents);

//fclose($fp);









/*$filename = "template.txt";
$filename2 = "update.txt";
$fp = fopen($filename, 'a');


$contents = file_get_contents($filename);*/
$contents = file_get_contents($filename2);

$new_contents = str_replace('generictel', $tel, $contents);
file_put_contents($filename2, $new_contents);

//fwrite($fp, $string);

fclose($fp);

echo "<a href = mail.php?upname=$upname&uid=$uid>" . "Continue" . "</a>";
echo $uid;
echo $upname;



//include (mail.php);

//cozamail();




//if (fclose($fp))
 //{

  // cozamail();

  //}
//domain name == genericdomain
//owners number ==generictel
//owners email == genericmail



?>