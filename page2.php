<?php
session_start();
$cno=$_POST["t1"];
$cname=$_POST["t2"];
$addr=$_POST["t3"];
$_SESSION["cno"]=$cno;
$_SESSION["cname"]=$cname;
$_SESSION["addr"]=$addr;
?>
<html>
    <body>
        <form method="POST"action="page3.php">
            enter product name:<input type="text"name="p1"><br>
            enter product quantity:<input type="text"name="p2"><br>
            enter product rate:<input type="text"name="p3"><br>
            <input type="submit"value="submit"><br>
</form>
</body>
</html>