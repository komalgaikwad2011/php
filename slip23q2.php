<form method="POST"action="#">
enter no<input type="text"name="n1"><br>
enter name<input type="text"name="n2"><br>
enter addr<input type="text"name="n3"><br>
<input type="submit"value="submit"><br>
</form>
<?php
$db=new mysqli("localhost","root","","komal")or die("not");
echo "connected";
$sql="create table hotel1(no int primary key,name varchar(20),addr varchar(20))";
if($db->query($sql)===TRUE)
{
    echo "table created";
}
else
{
    echo "not created";
}
$sql="insert into hotel(no,name,addr)values('".$_POST['n1']."','".$_POST['n2']."','".$_POST['n3']."')";
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