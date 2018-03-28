<?php


 function secure($value="")
{
	
$veri=addslashes($value);
$veri=htmlspecialchars($veri);
$veri=strip_tags($veri);
$veri=htmlentities($veri);
$veri=trim($veri);

return $veri;
}


?>