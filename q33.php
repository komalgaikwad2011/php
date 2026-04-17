<?php
$xml=simplexml_load_file("q33.xml");

        echo "<table border='1'>";
        echo "<tr><th>rollno</th><th>name</th><th>addr</th><th>college</th><th>course</th></tr>";
       
foreach($xml->student as $a)
{
    echo "<tr><td>$a->rollno</td><td>$a->name</td><td>$a->addr</td><td>$a->college</td><td>$a->course</tḍ></tr>";
}
     echo "</table>";
?>