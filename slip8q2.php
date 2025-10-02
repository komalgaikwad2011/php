<html>
    <body>
<form method="POST" action="#">
    enter string one<input type="text"name="s1"><br>
    enter string second<input type="text"name="s2"><br>
    small string in the big string<input type="radio"name="r"value="3"><br>
    find the pos of small string in the big string<input type="radio"name="r"value="3"><br>
    compare both string<input type="radio"name="r"value="3"><br>
    <input type="submit"vslue="submit"><br>
</form>
</body>
</html>
<?php
$a=$_POST['s1'];
$b=$_POST['s2'];
$ch=$_POST['r'];

switch($ch)
{
    case 1:$pos=strpos($a,$b)
    if($pos!=0)
    {
        echo "str2 not present at the str1";
    }
    else{
        echo "str2 is present at the str1";
    }
        break;
    case 2:$pos=srtpos($a,$b);
        echo "position is:".$pos;
        break;
    case 3:$pos=strcasecmp($a,$b);
        echo
        break;
}

?>