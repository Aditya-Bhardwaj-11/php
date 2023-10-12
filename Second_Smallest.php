<?php
$a=[1,2,3,4,5,6,7,8,9,8,7,6,5,4,3,2,1];
sort($a);
$b=$a[0];
for($x=0;$x<count($a);$x++)
{
    if($b<$a[$x])
    {
        echo $a[$x];
        break;
    }
}
?>