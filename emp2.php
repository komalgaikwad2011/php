<?php
session_start();
$eno=$_SESSION["eno"];
$ename=$_SESSION["ename"];
$addr=$_SESSION["addr"];
$sal=$_POST["t1"];
$da=$_POST["t2"];
$hra=$_POST["t3"];
$total=$sal+$da+$hra;
echo "<br>eno is:".$eno;
echo "<br>ename is:".$ename;
echo "<br>addr is:".$addr;
echo "<br>sal is:".$sal;
echo "<br>DA is:".$da;
echo "<br>HRA is:".$hra;
echo "<br>total:".$total;
?>