<?php
session_start();
$eno=$_POST["t1"];
$ename=$_POST["t2"];
$addr=$_POST["t3"];
$_SESSION["eno"]=$eno;
$_SESSION["ename"]=$ename;
$_SESSION["addr"]=$addr;
?>
<html>
    <body>
        <form action="emp2.php"method="POST">
enter sal<input type="text"name="t1"><br>
enter DA<input type="text"name="t2"><br>
enter HRA<input type="text"name="t3"><br>
<input type="submit"value="submit">
</form>
</body>
</html>