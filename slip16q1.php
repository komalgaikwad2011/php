<html>
    <form method="POST"action="#">
enter file<input type="text"name="f1"><br>
<input type="submit"value="submit"><br>
</form>
</html>
<?php
$f=$_POST['f1'];
$f2=filesize($f);
$fp=fopen($f,"r");
$data=fread($fp,$f2);
echo $data;
echo "file size:".$f2;
fclose($fp);
?>