<?php

function series($n)
{ 
    if($n>1)
    {
    $s=0;
    for($x=0;$x<$n;$x++)
    {
        $b=fact($x);
        $s+=($b);
        // echo $b.'<br>';
        // echo $s.'<br>';
    }
    echo $s;
    }
    else if($n==1)
    {
        echo '1';
    }
    else
    {
        echo 'Wrong Input';
    }
}
function fact($n)
{
    $fact=1;
    for($x=1;$x<=$n;$x++)
    {
        $fact*=$x;
    }
    return $fact;
}
series($_GET['num']);

?>