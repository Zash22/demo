<?php

$_GET;
$upname = $_GET['upname'];
$uid = $_GET ['uid'];


echo "Are you sure you wish to cancel? " . "<br />" . "<br />";

echo "<br />";

echo "<a href=\"cancel_func.php?upname=$upname&uid=$uid\">" . "Continue" . "</a>" .
     "<br />" . "<br />" .
     "or" . "<br />" . "<br />" .
     "<a href = \"client_product.php?uid=$uid\">" . "Do not cancel" . "</a>";

?>