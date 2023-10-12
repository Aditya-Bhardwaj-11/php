<?php

$a='abcd';
$b='abef';
$c='abcdef';
$len=0;
if(strlen($a)>strlen($b))
{
    if(strlen($c)>strlen($b))
    {
        $len=strlen($b);
    }
    else
    {
        $len=strlen($c);
    }
}
else
{
    $len=strlen($a);
}
echo $len;



?>