<html>
    <body>
    <form method="POST"action="#">
    enter 1 number<input type="text"name="s1"><br>
     enter 2 number<input type="text"name="s2"><br>
     <input type="radio"name="r"value="1">+<br>
     <input type="radio"name="r"value="2">-<br>
     <input type="radio"name="r"value="3">*<br>
     <input type="radio"name="r"value="4">/<br>
     <input type="radio"name="r"value="5">%<br>
     <input type="submit"value="submit"><br>
</form>
<?php
require "a.php";
$a=$_POST['s1'];
$b=$_POST['s2'];
$ch=$_POST['r'];
$r1=cal($a,$b,$ch);
echo "<p>result:$r1</p>";
?>
</body>
</html>
