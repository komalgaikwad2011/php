<html>
    <body>
<form method="POST" action="#">
enter 1 file<input type="text" name="f1"><br>
enter 2 file<input type="text" name="f2"><br>   
<input type="submit" value="submit"><br>
</form>
</body>
</html>
<?php
$f=$_POST['f1'];
$s=$_POST['f2'];
$file_append=file_get_contents($f);
file_put_contents($s,$file_append,FILE_APPEND);
echo "file append successfully";
?>