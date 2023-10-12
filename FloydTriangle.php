<?php
$flag=1;
for($x=1;$x<=10;$x++)
{
    if($x%2!=0)
    {
        $flag=1;
    }
    for($y=1;$y<=10;$y++)
    {
        if($y<=$x)
        {
            if($flag==1)
            {
                echo "$flag";
                $flag=0;
            }
            else if($flag==0)
            {
                echo "$flag";
                $flag=1;
            }
        }
        else
        {
            echo "&ensp;";
        }
    }
    echo '<br>';
}

?>