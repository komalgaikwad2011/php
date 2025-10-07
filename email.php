<html>
    <form method="POST"action="#">
enter email<input type="text"name="s1">
<input type="submit"value="submit">
</form>
</html>
<?php
$ch=$_POST['s1'];
if(preg_match("^[_a-z0-9_]+(\.[a-z0-9]+)*@[a-z0-9]+(\._a-z0-9_]+)*(\.[a-z]{2,3})$^",$ch))
{
    echo "valid email";
}
else
{
    echo "invalid email";
}
?>