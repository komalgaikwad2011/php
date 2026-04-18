<?php
session_start();
$eno=$_SESSION["eno"];
$ename=$_SESSION["ename"];
$addr=$_SESSION["addr"];

$basic=$_POST["t1"];
$DA=$_POST["t2"];
$HRA=$_POST["t3"];
$total=$basic+$DA+$HRA;

echo "eno is:".$eno."<br>";
echo "ename is:".$ename."<br>";
echo "addr is:".$eno."<br>";
echo "basic sal is:".$basic."<br>";
echo "DA is:".$DA."<br>";
echo "HRA is:".$HRA."<br>";
echo "total is:".$total."<br>";
?>