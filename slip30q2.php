<html>
    <form method="POST"action="#">
    enter string<input type="text"name="s1"><br>
    <input type="radio"name="r"value="1">length of string<br>
        <input type="radio"name="r"value="2">count vowels<br>
    <input type="radio"name="r"value="3">convert lowercase<br>
    <input type="radio"name="r"value="4">pad string with * from both side<br>
    <input type="radio"name="r"value="5">remove leading whitespace<br>
        <input type="radio"name="r"value="6">reverse the string<br>
    <input type="submit"value="submit"><br>
</form>
</html>
<?php
$a=$_POST['s1'];
$ch=$_POST['r'];
switch($ch)
{
    case 1:strlength($a);
        break;
    case 2:contv($a);
        break;
    case 3:lowercase($a);
        break;
    case 4:padboth($a);
        break;
    case 5:remove($a);
        break;
    case 6:reverse($a);
        break;
}
function strlength($a)
{
    $l=0;
    while($a[$l]!=null)
        {
            $l++;
        }
        echo $l;
}
function countv($a)
{
    $a=strtolower($a);
    $vcount=0;
    for($i=0;$i<strlen($a);$i++)
        {
            if(in_array($a[$i],["a","e","i","o","u"]));
            {
                $vcount++;
            }
        }
        echo $vcount;
}
function lowercase($a)
{
    $aa=strtolower($a);
    echo $aa;
    $bb=ucwords($a);
    echo $bb;
}
function padboth($a)
{
    $aa=str_pad($a,10,"*",STR_PAD_BOTH);
    echo $aa;
}
function remove($a)
{
    $aa=trim($a);
    echo $a;
}
function reverse($a)
{
    $aa=strrev($a);
    echo $aa;
}
?>