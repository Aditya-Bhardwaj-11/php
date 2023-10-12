<?php
$num=$_GET['num'];
$flag=0;
while(strlen($num)>1)
{
    $y=$num%10;
    if($y==5)
    {
        $flag=1;
        echo "Found";
        break;

    }
    $num/=10;

}
if($flag==0)
{
    echo "Not Found"; 
}
?>