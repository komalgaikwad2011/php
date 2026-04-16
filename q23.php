<?php
$f=fopen("q23.dat","r");
echo "<table border='1'>";
echo "<tr><th>srno</th><th>name</th><th>rno</th><th>addr</th><th>mobno</th></tr>";

while($row=fscanf($f,"%s%s%s%s%s"))
{

echo "<tr>";
foreach($row as $r)
{
echo "<td>$r</td>";
}
echo "</tr>";
}
echo "</table>";
fclose($f);
?>