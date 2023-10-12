<?php

$num=$_GET['num'];
$flag=0;
for($x=2;$x<=$num/2;$x++)
{
    if($num%$x==0)
    {
        $flag=1;
        echo "Not Prime";
        break;
    }
}
if($flag==0)
{
    echo "Prime";
}
?>