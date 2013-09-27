
<?php

$fn = "update.txt";



if (isset($_POST['content']))

{

    $content = stripslashes($_POST['content']);

    $fp = fopen($fn,"w") or die ("Error opening file in write mode!");

    fputs($fp,$content);

    fclose($fp) or die ("Error closing file!");

}

?>



<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">

    <textarea rows="25" cols="40" name="content"><?php readfile($fn); ?></textarea>

    <input type="submit" value="Sauver">

</form>