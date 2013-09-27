<?php


$filename = "template.txt";
$filename2 = "update.txt";
$fp = fopen($filename, 'a');


$contents = file_get_contents($filename);
$new_contents = str_replace('nicolej@afrihost.com', 'genericmail', $contents);
file_put_contents($filename, $new_contents);
//fwrite($fp, $string);
fclose($fp);


//domain name == genericdomain
//owners number ==generictel
//owners email == genericmail
?>