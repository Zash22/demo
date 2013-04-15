<?php
$fn = "update.txt";
$file = fopen($fn, "a+");
$size = filesize($fn);

if($_POST['addition']) fwrite($file, $_POST['addition']);

$text = fread($file, $size);
fclose($file);
?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <textarea><?=$text?></textarea><br/>
    <input type="text" name="addition"/>
    <input type="submit"/>
</form>