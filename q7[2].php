<?php
session_start();

$cname=$_SESSION["cname"];
$addr=$_SESSION["addr"];
$mobno=$_SESSION["mobno"];

$pname=$_POST["p1"];
$quality=$_POST["p2"];
$rate=$_POST["p3"];

echo "customer name:".$cname."<br>";
echo "addr :".$addr."<br>";
echo "customer mobno:".$mobno."<br>";
echo "product name:".$pname."<br>";
echo "quantity:".$quality."<br>";
echo "rate:".$rate."<br>";

?>