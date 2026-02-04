<?php
session_start();
$_SESSION["username"]="abc";
$_SESSION["id"]="1";
$_SESSION["class"]="tybcs";
?>
<html>
    <body>
        <?php
        echo "session varible is set";
        ?>
        <a href="ss.php">go to second page</a>
</body>
</html>