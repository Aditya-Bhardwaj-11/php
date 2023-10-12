<?php

$x=2;
while($x<=100)
{
    $y=2;$flag=0;
    while($y<=$x/2)
    {
        if($x%$y==0)
        {
            $flag=1;
            break;
        }
        $y++;
    }
    if($flag==0)
    {
        echo $x.'<br>';
    }
    $x++;
}







?>