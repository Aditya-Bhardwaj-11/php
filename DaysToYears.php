<?php

$days=$_GET["num"];
$year=0;
$week=0;
$day=0;
while($days!=0)
{
    if($days>=365)
    {
        $year++;
        $days-=365;
    }
    else if($days>=7)
    {
        $week++;
        $days-=7;
    }
    else{
        $day=$days;
        $days=0;
    }


}

echo "$year years   $week   weeks   $day   days";



?>