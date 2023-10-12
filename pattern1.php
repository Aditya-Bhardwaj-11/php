<?php
for($x=1;$x<=5;$x++)
{
    for($y=1;$y<=10;$y++)
    {
        
        if($y<2*$x)
        {
            echo "*";
        }
        else
        {
            echo "&ensp;";
        }
    }
    echo '<br>'; 
}
for($x=1;$x<=5;$x++)
{
    for($y=1;$y<=8;$y++)
    {
        if($y>=2*$x)
        {
            echo "*";
        }
    }
    echo '<br>';
}




?>