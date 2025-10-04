<?php
$db=new mysqli("localhost","root","","komal")or die("not");
echo "connected";
$sql="create table student(rno int primary key,name varchar(20),marks int)";
if($db->query($sql)===TRUE)
{
    echo "table created";
}
else
{
    echo "not created";
}
$db->close();
?>