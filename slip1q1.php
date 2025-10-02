<html>
    <body>
        <form method="POST" action="#">
enter student name<input type="text" name="s1"><br>
enter college name<input type="text" name="s2"><br>
enter greating name<input type="text" name="s3"><br>
<input type="submit"name="submit"value="submit">
        </form>
    </body>
</html>

<?php
$a=$_POST['s1'];
$b=$_POST['s2'];
$c=$_POST['s3'];
function display($c,$a,$b)
{
    if($c==null or $a==null or $b==null)
    {
        echo "welcome";
    }
    else
     {
        echo $c." ".$a." from ".$b;
    }
}
display($c,$a,$b);
?>