<?php
session_start();
$cname=$_POST["t1"];
$addr=$_POST["t2"];
$mobno=$_POST["t3"];

$_SESSION["cname"]=$cname;
$_SESSION["addr"]=$addr;
$_SESSION["mobno"]=$mobno;

?>
<html>
    <body>
        <form action="q7[2].php"method="POST">
            enter pname<input type="text"name="p1"><br>
            enter quntity<input type="text"name="p2"><br>
            enter rate<input type="text"name="p3"><br>
                <input type="submit"value="submit">
        </form>
</body>
</html>