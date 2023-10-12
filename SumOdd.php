<?php

$a=[1,2,3,4,5,6,7,8,9,10,'a','bcs',4,6,8,7,3,'b'];
$sum=0;
for($x=0;$x<count($a);$x++)
{
    if(is_int($a[$x])  && $a[$x]%2!=0)
    {
        $sum+=$a[$x];
    }
}
echo $sum;




?>