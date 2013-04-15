<?php
require ("Database.php");
Database::db();
?>





<?php

//require_once ("sql.php");

?>


<?php

$_GET;
$uid = $_GET['uid'];

//echo $uid;

        include ("client_product_func.php");
        client_product ($uid);

?>

<pre>
Want to sign up another product?

Click on the product type you want:

ADSL:
=====

<a href= "add_product.php?ptype=ab&uid=<?php echo $uid?>">ADSL Bronze</a>

<a href= "add_product.php?ptype=as&uid=<?php echo $uid?>">ADSL Silver</a>

<a href= "add_product.php?ptype=ag&uid=<?php echo $uid?>">ADSL Gold</a>

<a href= "add_product.php?ptype=au1&uid=<?php echo $uid?>">ADSL Uncapped 1</a>

<a href= "add_product.php?ptype=au2&uid=<?php echo $uid?>">ADSL Uncapped 2</a>

<a href= "add_product.php?ptype=au4&uid=<?php echo $uid?>">ADSL Uncapped 4</a>


Linux Shared Hosting:
=====================

<a href= "add_product.php?ptype=lb&uid=<?php echo $uid?>">Linux Bronze</a>

<a href= "add_product.php?ptype=ls&uid=<?php echo $uid?>">Linux Silver</a>

<a href= "add_product.php?ptype=lg&uid=<?php echo $uid?>">Linux Gold<a/>

Windows Shared Hosting:
=======================

<a href= "add_product.php?ptype=wb&uid=<?php echo $uid?>">Windows Bronze</a>

<a href= "add_product.php?ptype=ws&uid=<?php echo $uid?>">Windows Silver </a>

<a href= "add_product.php?ptype=wg&uid=<?php echo $uid?>">Windows Gold </a>




<!--<a href= "adsl.php?uid=<?php echo $uid?>">ADSL</a>

 <br />

<a href= "linux.php?uid=<?php echo $uid?>">Linux Shared Hosting</a>

    <br />

<a href= "windows.php?uid=<?php echo $uid?>">Windows Shared Hosting</a>
*/-->
</pre>

