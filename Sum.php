<?php

$num=$_GET['num'];
$sum=0;
for($x=1;$x<=$num;$x++)
{
    $sum+=$x;
}
echo $sum;
?>