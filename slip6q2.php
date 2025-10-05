<html>
    <body>
<form method="POST"action="#">
enter 1 file<input type="text"name="f1"><br>
.display type of file<br>
.display last access time of file<br>
.display the size of file<br>
.delete the file<br>
enter choice<input type="text"name="ch"><br>
<input type="submit"value="submit">
</form>
</body>
</html>
<?php
$f=$_POST['f1'];
$c=$_POST['ch'];
switch($c)
{
    case 1:
        echo "Type of file is:".filetype($f);
        break;
    case 2:
        echo "Last access time of file is:".fileatime($f);
        break;
    case 3:
        echo "Size of file is:".filesize($f);
        break;
    case 4:
        if(unlink($f))
        {
            echo "File deleted successfully";
        }
        else{
            echo "File does not delete";
        }
        break;
}
?>