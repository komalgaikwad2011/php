<?php
session_start();
$username=$_SESSION["username"];
$id=$_SESSION["id"];
$class=$_SESSION["class"];
echo "<br>username".$username;
echo "<br>id".$id;
echo "<br>class".$class;
?>