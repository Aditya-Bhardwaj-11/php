<?php
for($x=1;$x<=5;$x++)
{
    for($y=5;$y>=1;$y--)
    {
        if($y<=$x)
        {
            echo "$y";
        }
        else
        {
            echo "&nbsp";
        }
    }
    echo '<br>';
}


?>