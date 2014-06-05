 <?php
session_start();
session_destroy();
echo"has cerrado session";
header ("Location: index.php");
//echo"<li><a href=index.php>Regresar</a></li>";
?>
 
