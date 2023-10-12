<?php

//Array Add
function AddNumeric($array)
{
    $sum=0;
    $s=0;
    $s2=0;
    for($x=0;$x<count($array);$x++)
    {
        if(gettype($array[$x])=='integer' or gettype($array[$x])=='double')//gettype
        {
            $sum+=$array[$x];
        }
        if(is_int($array[$x]) or is_double($array[$x]))//is_int (Seperate entities)
        {
            $s+=$array[$x];
        }
        if(is_numeric($array[$x]))//is_numeric checks numeric or not
        {
            $s2+=$array[$x];
        }
    }
    echo $sum.'<br>';
    echo $s.'<br>';
    echo $s2.'<br>';
}
AddNumeric([1,2,3,4,5,6,7,'dsf','sdgs',8,9,10]);

//Call By Reference
$a=200;
function test(&$x)
{
    $x++;
}
$a=19;
test($a);
echo $a.'<br>';

function square($a)
{
    return $a**2;
}
function cube($a)
{
    return $a**3;
}
$sq=square(5);
echo square($sq).'<br>';
echo cube($sq).'<br>';

//anonymous Function
$square=function($x){return $x**2;};
echo $square(5);
?>