<?php

$a=[1,2,3,4,5,6,7,8,9,7,6,5,4,3,2,1,2,3,4,5,6,7,5,4,3,2,1,2,3,4,5,6,6,7,5,6,4,3,2,4,4,9,9,9,10];
sort($a);
echo '<pre>';
print_r($a);
echo '<pre>';
echo '<br>';
$b=$a[0];
$c=1;
for($i=1;$i<count($a);$i++)
{
    if($b==$a[$i])
    {
        $c++;
    }
    else 
    {
        echo "$b occured $c times.<br>";
        $b=$a[$i];
        $c=1;
    }
    if($i==count($a)-1)
    {
        echo "$b occured $c times.<br>";
    }
}


?>