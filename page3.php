<?php
session_start();
$cno=$_SESSION["cno"];
$cname=$_SESSION["cname"];
$addr=$_SESSION["addr"];

$pname=$_POST["p1"];
$quantity=$_POST["p2"];
$rate=$_POST["p3"];

$_SESSION["pname"]=$pname;
$_SESSION["quantity"]=$quantity;
$_SESSION["rate"]=$rate;

$total=$quantity*$rate;

echo "<br>customer no: ".$cno;
echo "<br>customer name: ".$cname;
echo "<br>customer addr: ".$addr;
echo "<br>product name: ".$pname;
echo "<br>product qauntity: ".$quantity;
echo "<br>product rate: ".$rate;
echo "<br>total: ".$total;

?>