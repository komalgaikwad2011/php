<?php
$name=$_GET["name"];
$a=["rohit","virat"];
if($name=="")
    {
        echo "stranger,please tell me your name!";
    }
    else
        {
            if(in_array($name,$a))
                {
                    echo "hello,master"+$name;
                }
                else
                    {
                        echo $name+"i dont Know you!";
                    }
        }

?>  