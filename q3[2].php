<?php
$style=$_COOKIE["style"];
$size=$_COOKIE["size"];
$color=$_COOKIE["color"];
$bgcolor=$_COOKIE["bgcolor"];
echo "<body bgcolor=$bgcolor>";
echo "<font style=$style>hello";
echo "<font size=$size>hello";
echo "<font color=$color>hello";
echo "</font></body>";
?>