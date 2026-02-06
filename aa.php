<?php
$style=$_POST["t1"];
$size=$_POST["t2"];
$color=$_POST["t3"];
$bgcolor=$_POST["t4"];
echo "<br>style is :".$style;
echo "<br>size is :".$size;
echo "<br>color is :".$color;
echo "<br>bgcolor is :".$bgcolor;
setcookie("style",$style,time()+3600);
setcookie("size",$size,time()+3600);
setcookie("color",$color,time()+3600);
setcookie("bgcolor",$bgcolor,time()+3600);
?>
<html>
    <body>
<a href="bb.php">ok</a>
</body>
</html>