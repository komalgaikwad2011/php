<html>
    <form method="POST"action="#">
.add element<br>
.delete element<br>
.print element<br>
enter choice<input type="text"name="s1">
<input type="submit"value="submit">
</form>
</html>
<?php
$ch=$_POST['s1'];
$a=array(20,30,50);
switch($ch)
{
    case 1:array_push($a,60);
        print_r($a);
        break;
    case 2:array_pop($a);
        print_r($a);
        break;
    case 3:$n=print_r($a);
        break;
}
?>