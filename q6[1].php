<?php
$eno=$_POST["t1"];
$ename=$_POST["t2"];
$addr=$_POST["t3"];
setcookie("eno",$eno,time()+3600);
setcookie("ename",$ename,time()+3600);
setcookie("addr",$addr,time()+3600);
?>
<html>
<body>
    <form action="q6[2].php"method="POST">
        enter basic salary<input type="text"name="t1"><br>
        enter DA<input type="text"name="t2"><br>
        enter HRA<input type="text"name="t3"><br>
        <input type="submit"value="next">
</form>
</body>
</html>