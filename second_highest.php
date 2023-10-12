<?php
$array=[4,5,7,8,60,4,3,5,6,7,43,4,65,74,6,8,35,64,45,23,34,23,23,56,64,65,65,65,74,74,74,74];
sort($array);
for($loop=count($array)-1;$loop>0;$loop--)
{
    if($array[$loop]>$array[$loop-1]){
        echo $array[$loop-1];
        break;
    }
}
?>