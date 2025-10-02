<html>
    <body>
        <form method="POST" action="#">
            enter 1 number<input type="text"name="s1"><br>
            enter 2 number<input type="text"name="s2"><br>
            .mod<br>
            .power<br>
            .sum<br>
            .factorial<br>
            enter choice<input type="text"name="s3"><br>
            <input type="submit"value="submit"><br>
        </form>
    </body>
</html>
<?php
$a=$_POST['s1'];
$b=$_POST['s2'];
$ch=$_POST['s3'];
switch($ch)
{
    case 1:mod($a,$b);
        break;
    case 2:power($a,$b);
        break;
    case 3:sum($a);
        break;
    case 4:fact($a);
        break;
}
function mod($a,$b)
{
    $c=$a%$b;
    echo "mod is:".$c;
}
function power($a,$b)
{
    $p=1;
    while($b>0)
    {
        $p=$p*$a;
        $b--;
    }
    echo "power is:".$p;
}
function sum($a)
{
    $s=0;
    while($a>0)
    {
        $s=$s+$a;
        $a--;
    }
    echo "sum is:".$s;
}
function fact($a)
{
    $f=1;
    while($a>0)
    {
        $f=$f*$a;
        $a--;
    }
    echo "fact is:".$f;
}
?>