<?php
$myvar=True;
echo "<table border='1'>";
echo "<tr><td>$myvar</td><td>".gettype($myvar)."</td></tr>";
$myvar=9;
echo "<tr><td>$myvar</td><td>".gettype($myvar)."</td></tr>";
$myvar=7.8;
echo "<tr><td>$myvar</td><td>".gettype($myvar)."</td></tr>";
$myvar="hello123";
echo "<tr><td>$myvar</td><td>".gettype($myvar)."</td></tr>";
$myvar=array(1,2,3);
echo "<tr><td>".$myvar[0].$myvar[1].$myvar[2]."</td><td>".gettype($myvar)."</td></tr>";
$myvar=NULL;
echo "<tr><td>".$myvar."</td><td>".gettype($myvar)."</td></tr>";
$myvar=tmpfile();
echo "<tr><td>$myvar</td><td>".gettype($myvar)."</td></tr>";



echo "</table>"

?>