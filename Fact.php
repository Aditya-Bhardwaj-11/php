<?php

$num=$_GET['num'];
if($num>0)
{
$fact=1;
for($x=1;$x<=$num;$x++)
{
    $fact*=$x;
}
echo $fact.'<br>';
}
else
{
    echo "Wrong Input";
}
?>