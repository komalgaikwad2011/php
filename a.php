<?php
function cal($a,$b,$ch)
{
    switch($ch)
    {
        case 1:return $a+$b;
            break;
          case 2:return $a-$b;
            break;
         case 3:return $a*$b;
            break;
         case 4:return $a/$b;
            break;
             case 5:return $a%$b;
            break;
        
           
    }
}
?>