<?php
setcookie("username","abc",time()+60*60);
?>
<html>
    <body>
        <?php
        if(isset($_COOKIE["username"]))
        {
            echo "cookie is set with value".$_COOKIE["username"];
        }
        else
        {
            echo "not set";
        }
        ?>
</body>
</html>