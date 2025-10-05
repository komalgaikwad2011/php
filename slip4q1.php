<html>
    <body>
<form method="POST"action="#">
enter 1 file<input type="text"name="f1"><br>
enter 2 file<input type="text"name="f2"><br>
<input type="submit" value="submit"><br>
</form>
</body>
</html>
<?php
$a=$_POST['f1'];
$b=$_POST['f2'];

if(copy($a,$b))
{
    echo "Copy Successfully";
}
else{
    echo "does not copy";
}
?>