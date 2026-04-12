<?php
$style=$_POST["t1"];
$size=$_POST["t2"];
$color=$_POST["t3"];
$bgcolor=$_POST["t4"];
echo "style is:".$style;
echo "size is:".$size;
echo "color is:".$color;
echo "bgcolor is:".$bgcolor;
setcookie("style",$style,time()+3600);
setcookie("size",$size,time()+3600);
setcookie("color",$color,time()+3600);
setcookie("bgcolor",$bgcolor,time()+3600);
?>
<html>
</body>
<a href="q3[2].php">ok</a>
</body>
</html>