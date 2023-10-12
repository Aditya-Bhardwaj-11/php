<?php
for($x=1;$x<=5;$x++)
{
    for($y=1;$y<=5;$y++)
    {
        if($y>=$x)
        {
            echo "$y";
        }
        else
        {
            echo "&ensp;";
        }
    }
    echo '<br>';
}
?>