<?php
$sum=0;
for($x=1;$x<20;$x++)
{
    if($x%2!=0)
    {
        $sum+=$x;
        echo $x.'<br>';
    }
}
echo $sum;




?>