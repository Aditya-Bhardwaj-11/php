<?php

$a=$_GET['num'];
$ac=$a;
$b=0;
while($a>=1)
{
    $b*=10;
    $temp=$a%10;
    $a/=10;
    $b+=$temp;
    
echo $b . '<br>';

}
echo $b . '<br>';
if($b==$ac)
{
    echo "Palindrome";
}
else
{
    echo "Not Palindrome";    
}




?>