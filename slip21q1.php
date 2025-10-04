<?php
$db=new mysqli("localhost","root","","komal")or die("not");
echo "connected";
$sql="insert into student(rno,name,marks)values(1,'komal',90),(2,'sonal',80),(3,'monal',70),(4,'tonal',60),(5,'bonal',50)";
if($db->query($sql)===TRUE)
{
    echo "data inserted";
}
else
{
    echo "not inserted";
}
$db->close();
?>