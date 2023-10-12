<?php

$a=[1,2,3,4,5,6,7,8];
$b=[9,8,7,6,5,3,2,4,5,6,2,5,6];
$x=0;
$result=[];
if(count($a)<=count($b))
{
    $x=count($a);
}
else
{
    $x=count($b);
}
for($i=0;$i<$x;$i++)
{
    array_push($result,$a[$i]+$b[$i]);
}
echo '<pre>';
print_r($result);
echo '</pre>';
?>