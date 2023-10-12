<?php
$a=0;
$b=1;
echo $a.'<br>';
echo $b.'<br>';
$num=$_GET['num'];
for($x=3;$x<=$num;$x++)
{
    $temp=$a+$b;
    echo $temp.'<br>';
    $a=$b;
    $b=$temp;
}
?>