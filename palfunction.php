<?php

function pal($s)
{
    $rs=strrev($s);
    if($rs==$s)
    {
        echo 'Palindrome';
    }
    else 
    {
        echo 'not Palindrome';
    }
}

pal('MOM DAD MOM');

?>