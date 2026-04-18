<?php

$eno=$_COOKIE["eno"];
$ename=$_COOKIE["ename"];
$addr=$_COOKIE["addr"];

$basic=$_POST["t1"];
$DA=$_POST["t2"];
$HRA=$_POST["t3"];
$total=$basic+$DA+$HRA;

echo "eno is".$eno;
echo "ename is:".$ename;
echo "addr is:".$eno;
echo "basic sal is:".$basic;
echo "DA is:".$DA;
echo "HRA is:".$HRA;
echo "total is:".$total;
?>