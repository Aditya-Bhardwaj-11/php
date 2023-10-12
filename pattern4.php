<?php
for($x=5;$x>=1;$x--)
{
    for($y=1;$y<=5;$y++)
    {
        if($y>=$x)
        {
            echo "$y";
        }
        else
        {
            echo "&#160;";
        }
    }
    echo '<br>';
}


?>